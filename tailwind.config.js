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
    daisyui: {
        themes: true, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    },
}
