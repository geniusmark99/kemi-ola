import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        backgroundSize: {
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
            '50%': '50%',
            '16': '4rem',
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "kemi-ojo": "#42038F",
                "kemi-ojo-light": "#6F40AA",
                "kemi-ojo-2": "#E08300",
                "kemi-ojo-3": "#0284CF",
                "protokos": "#E3742D",
                "protokos-pub": "#F6BD00"

            },
            keyframes: {
                marquee: {
                    '0%': { transform: 'translateX(0)' },
                    'to': { transform: 'translateX(-100%)' },
                }
            },
            animation: {
                'animate-carousel': 'marquee 60s linear infinite',
            }

        },
    },

    plugins: [forms],
};
