module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./src/resources/**/*.{php,html,js}",
        "*.php"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
