import './bootstrap';
import '../css/app.css';
import '../css/style.css';
import '../css/fancybox.min.css';
import 'aos/dist/aos.css';
import './customJs/jquery-3.3.1.min';
import './customJs/owl.carousel.min';
import './customJs/jquery.magnific-popup.min';
import './customJs/jquery.countdown.min';
import './customJs/mediaelement-and-player.min';
import './customJs/jquery.fancybox.min';
import './customJs/masonry.pkgd';
import './customJs/imagesloaded.pkgd.min';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
