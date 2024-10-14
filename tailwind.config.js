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
        lineColor: '#e0e2e9',
      },

      fontFamily : {
        secFont : 'Protest Riot, sans-serif'
      },

      boxShadow : {
        custom : '-15px 15px 0px -7px rgba(216,218,222,0.75)'
      }
    },
  },
  plugins: [],
}

