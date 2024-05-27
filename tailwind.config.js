const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Noto Sans', ...defaultTheme.fontFamily.sans],
                zhs: ['Noto Sans SC', ...defaultTheme.fontFamily.sans],
                zht: ['Noto Sans TC', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                primary: {
                    "50": "#E0FCFF",
                    "100": "#BEF8FD",
                    "200": "#87EAF2",
                    "300": "#54D1DB",
                    "400": "#38BEC9",
                    "500": "#2CB1BC",
                    "600": "#14919B",
                    "700": "#0E7C86",
                    "800": "#0A6C74",
                    "900": "#044E54",
                    "950": "#071B1D",
                },
                secondary: {
                    "50": "#FFE8D9",
                    "100": "#FFD0B5",
                    "200": "#FFB088",
                    "300": "#FF9466",
                    "400": "#F9703E",
                    "500": "#F35627",
                    "600": "#DE3A11",
                    "700": "#C52707",
                    "800": "#AD1D07",
                    "900": "#841003",
                    "950": "#1C0802",
                },
                grey: colors.gray,
            }
        }
        // container: {
        //     padding: {
        //         DEFAULT: '1rem',
        //         sm: '2rem',
        //         lg: '0rem'
        //     },
        // },
        // extend: {
        //     // colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
        //     // fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
        //     primary: colors.violet,
        // },
        // screens: {
        //     'xs': '480px',
        //     'sm': '600px',
        //     'md': '782px',
        //     'lg': tailpress.theme('settings.layout.contentSize', theme),
        //     'xl': tailpress.theme('settings.layout.wideSize', theme),
        //     '2xl': '1440px'
        // }
    },
    plugins: [
        tailpress.tailwind,
        require('@tailwindcss/typography'),
    ]
};
