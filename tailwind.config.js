module.exports = {
  purge: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      '.resources/**/*.vue'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    screens: {
        'sm': '320px'
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
