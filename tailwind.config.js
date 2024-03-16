import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                wisend: {
                    red: "#E11F26",
                    blue: "#374FA7",
                },
            },
        },
    },

    plugins: [
        forms,
        require("flowbite/plugin"),
        require("tailwindcss"),
        require("autoprefixer"),
        // Add a custom plugin to define the clearfix class
        function ({ addUtilities }) {
            const newUtilities = {
                ".clearfix::after": {
                    content: "''",
                    display: "table",
                    clear: "both",
                },
            };
            addUtilities(newUtilities, ["after"]);
        },
    ],
};
