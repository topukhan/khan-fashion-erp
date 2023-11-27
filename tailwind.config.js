/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
            'dark': '#212529',
            'bg-dark': '#212529',
        },
    },
  },
  plugins: [],
}

