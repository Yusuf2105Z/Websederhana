import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],

    theme: {
        extend: {
            fontFamily: {
                'protest': ['Protest Guerrilla', 'Monospace'], 
                'poppins': ['Poppins', 'sans-serif'], 
                'handjet': ['Handjet', 'sans-serif'], 
            },

            colors:{
                'custom-blue':'#a0d5ff',
                'custom-white':'#ffffff',
            },
        },
    },

    plugins: [forms],
};
