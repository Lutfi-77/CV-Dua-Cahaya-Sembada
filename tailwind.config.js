/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                nunito: ['"Nunito"', ...defaultTheme.fontFamily.sans],
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    sm: "2rem",
                    "2xl": "6rem",
                },
            },
            colors: {
                primary: "#FFD500",
            },
            boxShadow: {
                "3xl": "rgba(0, 0, 0, 0.35) 0px 5px 15px",
            },
        },
    },
    plugins: [],
};
