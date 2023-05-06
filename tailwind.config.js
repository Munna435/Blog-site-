const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            center: true
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/line-clamp')],
};
