import { createApp, h } from "vue";
import { createInertiaApp, Link,Head } from "@inertiajs/vue3";

import Layout from "./Shared/Layout.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        const page = pages[`./Pages/${name}.vue`];
        if (page && page.default) {
            page.default.layout = page.default.layout || Layout;
        }

        return page;
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app.use(plugin);
        app.component("Link", Link);
        app.component("Head", Head);
        app.mount(el);
    },

    title: title  => `Satrany ecommerce : ${title}`
});

