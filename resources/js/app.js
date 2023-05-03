import './bootstrap';
import '../css/app.css';
import '../css/animate.css';
import '../css/LineIcons.2.0.css';
import '../css/main.css';
import '../css/tailwind.css';
import '../css/tiny-slider.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { LightGallery } from 'vue-light-gallery';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy).use(LightGallery)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
