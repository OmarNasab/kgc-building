const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.js",
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        boxShadow:{
          DEFAULT:"0px 4px 4px 0px #00000040"
        },
        borderRadius:{
            sm:"0.625rem",
            DEFAULT:"1.25rem",
            md:"1.875rem",
            lg:"3.125rem"
        },
        extend: {
            colors:{
                primary:"#9A742B",
                secondary:"#FFF4DB",
                default:"#D7B66C"
            },
            borderRadius:{
                circle:"50%"
            },
            borderWidth:{
                3:"3px",
                5:"5px"
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            fontSize:{
                "6xl":"60px"
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ]

};
