module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'dark': '#0d1117',
      'white': '#ffffff',
      'lightgray': '#f5f5f5',
      'gray': '#d5d5d5',
      'darkgray': '#374151',
      'blue': '#094f62'
    },
    fontFamily: {
      sans: ['Verdana', 'sans-serif'],
    },
    extend: {},
  },
  variants: {
    extend: {
      animation: ['group-hover'],
    },
  },
  plugins: [],
}
