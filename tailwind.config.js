/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php'
  ],
  theme: {
    fontFamily: {
      poppins: ["Poppins", "sans-serif"],
    },
    extend: {
      height: {
        'fill-available': '-webkit-fill-available',
        'moz-available': '-moz-available',
      },
      width: {
        'fill-available': '-webkit-fill-available',
        'moz-available': '-moz-available',
      },
    },
  },
  plugins: [],
}