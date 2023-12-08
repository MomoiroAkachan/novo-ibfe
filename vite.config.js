import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/ie-fwk.js', 
                    'resources/scss/master.scss', 'resources/scss/ie-fwk.scss',
                ],
            refresh: true,
        }),
    ],
});
