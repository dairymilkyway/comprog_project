/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: [
      {
        mytheme: {
        
"primary": "#0081ff",
        
"secondary": "#00ef00",
        
"accent": "#00c0ad",
        
"neutral": "#020507",
        
"base-100": "#f6fdff",
        
"info": "#00d5ff",
        
"success": "#4ea200",
        
"warning": "#ab8500",
        
"error": "#cc1042",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
}

