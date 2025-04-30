import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue'; // Importa el plugin de Vue

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }), // Agrega el plugin de Vue
        tailwindcss(),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js', // Esto puede ser necesario para evitar problemas
        },
    },
});
// Este archivo de configuración de Vite está configurado para trabajar con Laravel y Vue.js.
// Se utiliza el plugin laravel-vite-plugin para manejar la integración con Laravel.
// También se incluye el plugin de Vue para permitir el uso de componentes Vue en la aplicación.
// Además, se configura Tailwind CSS para el estilo de la aplicación.