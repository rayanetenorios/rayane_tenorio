// const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        colors: {
            roxo: 'rgb(63, 23, 73)',
            rosaEscuro: 'rgb(105, 25, 88)',
            lilas: 'rgb(150, 139, 175)',
            branco: 'rgb(255, 255, 255)',
        },
        extend: {
            fontFamily: {
                hitmobold: ["Hitmo-Bold", "sans-serif"],
                hitmoblack: ["Hitmo-Black", "sans-serif"],
                hitmobegular: ["Hitmo-Regular", "sans-serif"],
                tommyregular: ["Tommy-Regular", "sans-serif"],
                tommylight: ["Tommy-Light", "sans-serif"],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
