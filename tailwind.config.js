/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.{vue,ts,js}',
  ],
  darkMode: 'media',
  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        'carousel': '25px 0px 20px -20px rgba(0,0,0,0.1) inset, -25px 0px 20px -20px rgba(0,0,0,0.1) inset',
      },
      colors: {
        brand: {
          '50': '#f7f6f5',
          '100': '#e3e2de',
          '200': '#d7d5d1',
          '300': '#bebcb3',
          '400': '#a39e94',
          '500': '#918a7e',
          '600': '#847c72',
          '700': '#6e6760',
          '800': '#5c5650',
          '900': '#4b4743',
          '950': '#272523',
        }
      }
    },
  },
  plugins: [require('@tailwindcss/forms')],
}

