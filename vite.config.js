import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/style.scss', 'resources/js/script.js', 'resources/js/scroll.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
