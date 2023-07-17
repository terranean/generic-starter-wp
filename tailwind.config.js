/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "node_modules/preline/dist/*.js",
    "./template-parts/blocks/*/**.php",
    "./template-parts/*/**.php",
    "./js/*/**.js",
    // "./svg/*/**.svg"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin') // may be unnecessary due to me stealing pieces of the JS - not really using the plugin
  ],
}

