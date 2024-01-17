/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
    "./src/*.js",
    "./app/Views/**/*.js",
    "./app/Views/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'orange-text': '#f1c95f',
      }
    },
  },
  variants: {
    extend: {
      display: ['group-focus']
    },
  },
  plugins: [],

}

