/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  darkMode: "class",
  plugins: [require("tailwindcss-animated")],
};
