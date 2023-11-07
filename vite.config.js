import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/home.scss',
                'resources/scss/about.scss',
                'resources/scss/services.scss',
                'resources/scss/profile.scss',
                'resources/scss/survey.scss',
                'resources/js/ie-fwk.js'
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
