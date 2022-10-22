/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      fredoka: "fredoka"
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ] 
}
