import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/fontawesome/css/fontawesome.css',
                'resources/fontawesome/css/brands.css',
                'resources/fontawesome/css/solid.css',
                'resources/css/app.scss',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
