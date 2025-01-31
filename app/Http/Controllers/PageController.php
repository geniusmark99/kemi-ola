<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use App\Models\CBTQuestion;
use App\Models\CBTResult;
use Illuminate\Support\Facades\Mail;
use App\Mail\CertificateMail;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCourse;


class PageController extends Controller
{

    public function studentCourseSlug($slug)
    {
        return View('general.student-lms-course-details');
    }

    public function studentQuiz(CBTQuestion $cbtquestions)
    {
        return View('general.student-lms-quiz', compact('cbtquestions'));
    }

    public function studentQuizSubmit(Request $request, CBTQuestion $cbtquestions)
    {
        $request->validate(['answers' => 'required|array']);
        $score = 0;
        foreach ($cbtquestions->questions as $question) {
            if (isset($request->answers[$question->id]) && $request->answers[$question->id] == $question->answer) {
                $score++;
            }
        }
        $percentage = ($score / $cbtquestions->questions->count()) * 100;
        auth()->user()->scores()->create([
            'quiz_id' => $cbtquestions->id,
            'score' => $percentage,
        ]);

        return redirect()->route('student.cbt-result', ['id' => $cbtquestions->id]);
    }

    public function studentDashboard()
    {
        $courses = Course::all();
        return View('general.student-lms-dashboard', compact('courses'));
    }

    public function studentCourses()
    {
        // $course_all = Course::all();
        // $courses = $course_all->only([1, 2, 3, 4, 5, 6]);
        $courses = Course::all();
        return View('general.student-lms-courses', compact('courses'));
    }


    // HERE
    public function studentCourseDetails($id)
    {
        $course = Course::where('id', $id)->firstOrFail();

        $userHasAccess = UserCourse::where('user_id', auth()->id())
            ->where('course_id', $id)
            ->where('expires_at', '>', now())
            ->exists();

        if (!$userHasAccess) {
            return redirect()->route('student.dashboard')->with('error', 'You need to enroll first.');
        } elseif ($userHasAccess) {
            return redirect()->route('course.cbt', ['course_code' => $course->course_code]);
        }
        // return View('general.student-lms-course-details', compact('course'));
    }



    public function studentCertificate()
    {
        return View('general.student-lms-certificate');
    }
    public function studentCbt()
    {
        return View('general.student-lms-cbt');
    }

    public function showCBT($course_code)
    {
        $course = Course::where('course_code', $course_code)->firstOrFail();
        $questions = CbtQuestion::where('course_code', $course_code)->get();

        return view('general.student-course-cbt', compact('course', 'questions'));
    }


    public function cbtSubmit(Request $request, $course_code)
    {
        $course = Course::where('course_code', $course_code)->firstOrFail();
        $questions = CbtQuestion::where('course_code', $course_code)->get();
        $user = Auth::user();
        $score = 0;
        $correctAnswers = 0;
        $totalQuestions = $questions->count();
        $answers = $request->except('_token');

        foreach ($questions as $question) {
            $userAnswer = $answers['question_' . $question->id] ?? null;

            if ($userAnswer && $userAnswer === $question->correct_answer) {
                $correctAnswers++;
            }
        }

        // Calculate score percentage
        $score = ($totalQuestions > 0) ? round(($correctAnswers / $totalQuestions) * 100, 2) : 0;
        $passed = $score >= 70;

        // dd($passed);

        // // Save result in database
        $cbtResult = CBTResult::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'score' => $score,
            'status' => $passed ? 'passed' : 'failed',
        ]);

        if ($passed) {
            $certificateUrl = route('certificate.generate', ['result_id' => $cbtResult->id]);
            Mail::to($user->email)->send(new CertificateMail($user, $course, $certificateUrl));
        }
        return redirect()->route('course.cbt.result', ['result_id' => $cbtResult->id]);
    }

    public function cbtResult($result_id)
    {
        $result = CBTResult::with('course')->findOrFail($result_id);
        return view('general.cbt-result', compact('result'));
    }

    public function generateCertificate($result_id)
    {
        $result = CBTResult::with('user', 'course')->findOrFail($result_id);

        if ($result->status !== 'passed') {
            return redirect()->route('course.cbt.result', ['result_id' => $result_id])->with('error', 'You did not pass the CBT.');
        }

        // Generate Certificate (This is a placeholder, replace with actual PDF generation)
        $certificateText = "Certificate of Completion\n\n";
        $certificateText .= "Awarded to: {$result->user->firstname} {$result->user->lastname}\n";
        $certificateText .= "For completing: {$result->course->title}\n";
        $certificateText .= "Score: {$result->score}%\n";

        return response($certificateText)->header('Content-Type', 'text/plain');
    }

    public function studentExam()
    {
        return View('general.student-lms-cbt-exam');
    }


    public function studentResult()
    {
        return View('general.student-lms-cbt-result');
    }


    public function studentSettings()
    {
        $user = auth()->user();
        return View('general.student-lms-settings', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = auth()->user();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->back()->with('status', 'Your profile have been updated successfully!');
    }

    public function passwordUpdate(Request $request)
    {
        $user = $request->user();
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The current password is incorrect.',
            ]);
        }
        $user->update(['password' => Hash::make($request->password)]);
        return redirect()->back()->with('password-status', 'Your password have been updated successfully!');
    }

    public function uploadPicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = $request->user();
        if ($user->profile_picture) {
            Storage::delete('public/profile_pictures/' . $user->profile_picture);
        }
        $filename = time() . '.' . $request->file('profile_picture')->extension();
        $request->file('profile_picture')->storeAs('public/profile_pictures', $filename);

        // Update the user profile
        $user->update(['profile_picture' => $filename]);

        return redirect()->back()->with('picture-status', 'Profile picture updated successfully!');
    }

    public function  medicaforget()
    {
        return View('general.medical-forget');
    }



    public function bookstore()
    {
        return View('general.bookstore');
    }

    public function about()
    {
        return View('general.about');
    }

    public function contact()
    {
        return View('general.contact');
    }

    public function blog()
    {
        return View('general.blog');
    }
    public function protokos()
    {
        return View('general.protokos');
    }
    public function medical()
    {
        return View('general.medical');
    }

    public function favourStore()
    {
        return View('general.favour-store');
    }

    public function yorubaWeb()
    {
        return View('general.ede-yoruba');
    }
}
