import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import VitePluginBrowserSync from 'vite-plugin-browser-sync';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/scss/app.scss'
            ],
            refresh: true,
        }),
        vue(),
        VitePluginBrowserSync({
            dev : {
                enable : false
            },
            preview :{
                enable : true
            },
            buildWatch : {
                enable : true,
                bs : {
                    proxy : "http://localhost/"
                }
            }
        }),
    ],
    server :{
        host : 'localhost'
    }
});
