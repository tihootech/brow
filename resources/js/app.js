import './bootstrap';
import '../css/app.css';

import "bootstrap-icons/font/bootstrap-icons.css";

import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from "@inertiajs/vue3";
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';


import en from "../lang/en.json" assert {type: 'json'};
import fa from "../lang/fa.json" assert {type: 'json'};

const __ = function (word) {
    const currentLanguage = this.$page.props.lang;
    if (currentLanguage == 'en'){
        return en[word] || word;
    }
    if (currentLanguage == 'fa'){
        return fa[word] || word;
    }
}

const methods = { __ };

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .mixin({
                methods: methods,
                components: { Link, Head },
            })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
