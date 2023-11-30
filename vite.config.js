import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const $csspath = 'resources/css/';
const $scsspath = 'resources/scss/';
const $jspath = 'resources/js/';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                $scsspath + 'home.scss',
                $scsspath + 'about.scss',
                $scsspath + 'profile.scss',
                $scsspath + 'survey.scss',
                $jspath + 'ie-fwk.js'
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
    server: { 
        hmr: {
            host: 'localhost',
        },
    }, 
});