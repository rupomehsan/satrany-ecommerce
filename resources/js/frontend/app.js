import { createApp } from 'vue';
import ProductCards from './components/Card/ProductCards.vue';
import FeatureProduct from './components/Home/FeatureProduct.vue';

// Function to mount Vue components
const mountComponent = (selector, component) => {
    const element = document.querySelector(selector);
    if (element) {
        createApp(component).mount(selector);
    }
};

// Mount components based on their presence in the DOM
mountComponent('#Home', FeatureProduct);
mountComponent('#Card', ProductCards);
