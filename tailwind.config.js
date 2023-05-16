/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    safelist: [
        "max-w-sidebar",
        "max-w-0",
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
            maxWidth: {
                'sidebar': '270px',
            },
            maxHeight: {
                "sm": "24rem",
                "md": "28rem",
                "lg": "32rem",
                "xl": "36rem",
                "2xl": "42rem",
                "3xl": "48rem",
                "4xl": "56rem",
                "5xl": "64rem",
                "6xl": "72rem",
                "7xl": "80rem",
            },
            minHeight: {
                "sm": "24rem",
                "md": "28rem",
                "lg": "32rem",
                "xl": "36rem",
                "2xl": "42rem",
                "3xl": "48rem",
                "4xl": "56rem",
                "5xl": "64rem",
                "6xl": "72rem",
                "7xl": "80rem",
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