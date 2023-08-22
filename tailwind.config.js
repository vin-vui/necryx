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
                'necryx':['dune_rise'],
                'h1':['neuropolitical'],
                'h2':['Bruno Ace', 'display'],
                'p':['Nunito Sans', 'sans-serif']
            },

            colors:{
                'seasalt': '#FAFAFA',
                'golden':'#D0A302',
                'smoky-black':'#0A0101',
                'black':'#04040A',
                'dark-red':'#8E0000',
            }
        },
    },

    plugins: [forms, typography],
};
