import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#f3f1f7',
                    100: '#e7e2ef',
                    200: '#d0c6e1',
                    300: '#b09dcd',
                    400: '#8d71b4',
                    500: '#391463',
                    600: '#330f59',
                    700: '#2b0c4b',
                    800: '#24093e',
                    900: '#1d0733',
                    950: '#110420'
                },
                secondary: {
                    50: '#f4faf0',
                    100: '#e6f4dd',
                    200: '#cee9be',
                    300: '#a7d88e',
                    400: '#5FAD41',
                    500: '#4e9c32',
                    600: '#3d7b27',
                    700: '#315f20',
                    800: '#294d1c',
                    900: '#233f19',
                    950: '#0f1f0a'
                }
            },
            keyframes: {
                marquee: {
                    '0%': {
                        transform: 'translateX(0)'
                    },
                    '100%': {
                        transform: 'translateX(-100%)'
                    },
                },
            },
            animation: {
                'marquee': 'marquee 20s linear infinite',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
