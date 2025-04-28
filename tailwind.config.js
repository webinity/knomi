/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    colors: {
      'primary-black': '#32383E',
      'primary-darkBlue': '#0F3858',
      'primary-blue': '#00AEEF',
      'primary-grey': '#C1D3E1',
      'primary-yellow': '#FFCB74',
      'white': '#fff',
      'header-link-color': '#212121'
    },
    extend: {
      borderRadius: {
        btn: '1px',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

