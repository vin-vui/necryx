import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'necryx': ['dune_rise'],
                'h1': ['neuropolitical'],
                'h2': ['Bruno Ace', 'display'],
                'p': ['Nunito Sans', 'sans-serif']
            },
            colors: {
                'seasalt': '#FAFAFA',
                'golden': '#D0A302',
                'smoky-black': '#0A0101',
                'lightblack': '#04040A',
                'dark-red': '#8E0000',
            },
            animation: {
                slideInLeft: '1.5s ease-out 0s 1 slideInLeft',
                slideInRight: '1.5s ease-out 0s 1 slideInRight',
                slideInTop: '1.5s ease-out 0s 1 slideInTop',
                slideInBottom: '1.5s ease-out 0s 1 slideInBottom',
            },
            keyframes: {
                slideInLeft: {
                    '0%': {
                        transform: 'translateX(-100%)',
                        opacity: '0',
                    },
                    '100%': {
                        transform: 'translateX(0)',
                        opacity: '1',
                    }
                },
                slideInRight: {
                    '0%': {
                        transform: 'translateX(100%)',
                        opacity: '0',
                    },
                    '100%': {
                        transform: 'translateX(0)',
                        opacity: '1',
                    }
                },
                slideInTop: {
                    '0%': {
                        transform: 'translateY(-100%)',
                        opacity: '0',
                    },
                    '100%': {
                        transform: 'translateY(0)',
                        opacity: '1',
                    }
                },
                slideInBottom: {
                    '0%': {
                        transform: 'translateY(100%)',
                        opacity: '0',
                    },
                    '100%': {
                        transform: 'translateY(0)',
                        opacity: '1',
                    }
                }
            }
        },
    },

    plugins: [forms, typography],
};
// module.exports = {
//     // ...
//     plugins: [
//       // ...
//       require('@tailwindcss/forms'),
//     ],
//   }
