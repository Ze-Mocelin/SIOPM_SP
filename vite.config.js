import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from "@rollup/plugin-inject";

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost:5173',
            protocol: 'ws',
            overlay: false,
        }  // Add this to force IPv4 only
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/menu.js'],
            refresh: true,
        }),
        inject({
            $: 'jquery', // this caused warnings for all my scss files that had $variable
            jQuery: 'jquery',
        }),
    ],
});
