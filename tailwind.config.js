/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        primary: '#3C6E71',
        secondary: '#5DC1A9',
        'dark-grey': '#353535',
        light: '#F5F5F5'
      },
      boxShadow: {
        '3xl': '0px 0px 10px 0px rgba(0, 0, 0, 0.15)',
        '4xl': '0px 0px 3px 0px rgba(0, 0, 0, 0.10) inset'
      },
      fontFamily: {
        articulat: ["articulat-cf", "sans-serif"],
        "articulat-heavy": ["articulat-heavy-cf", "sans-serif"],
      }
    },
  },
  plugins: [],
}

