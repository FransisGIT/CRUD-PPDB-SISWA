/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './index.php',
        './pages/**/*.{html,js,php}',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
    ],
}
