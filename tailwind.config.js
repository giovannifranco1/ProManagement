const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  important: true,
  // Active dark mode on class basis

    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            screens: {
              'print': {'raw': 'print'},
              // => @media print { ... }
              'sm': '640px',
              // => @media (min-width: 640px) { ... }

              'md': '768px',
              // => @media (min-width: 768px) { ... }

              'lg': '1024px',
              // => @media (min-width: 1024px) { ... }

              'xl': '1280px',
              // => @media (min-width: 1280px) { ... }

            },
            backgroundImage: (theme) => ({
              check: "url('/icons/check.svg')",
              landscape: "url('/images/landscape/2.jpg')",
            }),
        },
    },
    variants: {
      extend: {
        backgroundColor: ["checked"],
        borderColor: ["checked"],
        inset: ["checked"],
        zIndex: ["hover", "active"],
      },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    future: {
      purgeLayersByDefault: true,
    },
    darkMode: "class",
};
