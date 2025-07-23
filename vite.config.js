import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/dist/css/app.css',
                'resources/dist/js/app.js',
                // tambahkan lainnya sesuai kebutuhan
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
