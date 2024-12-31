import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { glob } from 'glob';

const getFiles = (path) => {
    return glob.sync(path);
};

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                ...getFiles('resources/js/**/*.js'),
                ...getFiles('resources/css/**/*.css'),
            ],
            refresh: true,
        }),
    ],
});
