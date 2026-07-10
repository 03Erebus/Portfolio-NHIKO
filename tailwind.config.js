/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // This tells Tailwind to look at your PHP views
    "./app/Views/**/*.php", 
    "./public/**/*.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [],

  darkMode: 'class', // Enable class-based dark mode

  safelist: [
    'border-blue-500', 
    'text-blue-500',// Add any classes you want to always include in the final CSS here
    'dark', // Ensure dark mode classes are included
  ],
}