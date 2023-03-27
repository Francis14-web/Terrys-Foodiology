/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
    ],
    theme: {
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
        extend: {
            height: {
                "fill-available": "-webkit-fill-available",
                "moz-available": "-moz-available",
            },
            width: {
                "fill-available": "-webkit-fill-available",
                "moz-available": "-moz-available",
            },
            keyframes: {
                FadeIn: {
                    "0%": { transform: "translateX(-120px)", opacity: "0" },
                    "100%": { transform: "translateX(100)", opacity: "1" },
                },
                Opac: {
                    "10%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                FadeInRight: {
                    "0%": { transform: "translateX(120px)", opacity: "0" },
                    "100%": { transform: "translateX(100)", opacity: "1" },
                },
            },
            animation: {
                FadeIn: "FadeIn .7s ease-in",
                FadeInRight: "FadeInRight .7s ease-in",
                Opac: "Opac 1s ease-in",
            },
        },
    },
    plugins: [],
};