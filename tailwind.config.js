/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: 
    {
      fontFamily: 
      {
        fredoka: ['"Fredoka"', 'sans-serif'],
      },

      colors:{
        untuktext: '#FDF8E2',
        untukbg:'#504E76',
        untukhoverar:'#8C89BA',
      }
    },
  },

}