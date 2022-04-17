module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  theme: {
    extend: {
      colors: {
        LightSlateGray: {
          50: '#f0f2f4',
          100: '#e2e6e9',
          200: '#c5ccd3',
          300: '#a8b3bd',
          400: '#8b99a7',
          500: '#6e8091',
          600: '#586674',
          700: '#424d57',
          800: '#2c333a',
          900: '#161a1d',
        },

      },
      boxShadow: {
        'emerald': '0 4px 6px -1px rgb(46 139 87 / .3), 0 2px 4px -2px rgb(46 139 87 / .3)',
        'orange': '0 4px 6px -1px rgb(234 88 12 / .3), 0 2px 4px -2px rgb(234 88 12 / .3)',
      }
    },
  },
  plugins: [require("./plugin")],
}
