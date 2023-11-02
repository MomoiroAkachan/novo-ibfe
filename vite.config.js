import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/home.css',
                'resources/css/ie-framework.css',
                'resources/js/ibfe_framework.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery'
        }
    },
    optimizeDeps: {
        include: ['feather-icons'],
    },
});
