/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./application/views/public/**/*.php'],
  theme: {
    extend: {
      colors : {
        primary: '#528EA4',
        secColor: '#ADCEDE',
        bgColor: '#fff',
        textColor: '#7a7a7a',
      },

      fontFamily : {
        secFont : 'Protest Riot, sans-serif'
      }
    },
  },
  plugins: [],
}

