/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/js/**/*.{html,js}",  // Include HTML and JS files in the resources/js directory
    "./resources/views/**/*.{html,php}", // Include HTML and PHP files in the resources/views directory
    // Add any other directories where you use Tailwind CSS classes
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
