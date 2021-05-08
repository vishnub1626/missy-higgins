const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ["Open Sans", "Arial", "sans-serif"],
        },
        extend: {
            colors: {
                yellow: "#f8f5ec",
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
