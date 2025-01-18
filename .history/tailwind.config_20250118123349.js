import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./index.html", "./src/**/*.{html,js,jsx,ts,tsx}", "./components/**/*.{js,ts,jsx,tsx}",
        "./node_modules/flowbite/**/*.js"
        
    ],

    theme: {
        extend: {
            colors: {
                'purple-dark': '#924E90',
                'dark-purple': '#38194A',
                'light-pink': '#fff1f3',
                'light-pink-2': '#eec9cede', 
                'light-pink-3': '#eec9ceec',
                'brown-light': '#A5603A',
                'brown-dark': '#6B1900',
                'blue-light': '#63839D',
                'blue-dark': '#5F678B',
                'white': '#FFFFFF',
                'black': '#000000',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundColor: theme => theme('colors'),
            textColor: theme => theme('colors'),
        },
    },

    plugins: [forms,
        require('flowbite/plugin')
    ],
};
