import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                //  add anything that end with .js or .css
                'resources/js/**/*.js',
                'resources/css/**/*.css',
            ],
            refresh: true,
        }),
    ],
});
