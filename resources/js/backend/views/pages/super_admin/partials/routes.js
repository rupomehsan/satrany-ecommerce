import Layout from "./Layout.vue";
import Dashboard from "../Dashboard.vue";

import slider_routes from "../management/slider/setup/routes";

import product_category_routes from "../management/ProductManagement/ProductCategory/setup/routes";
import product_brand_routes from "../management/ProductManagement/ProductBrand/setup/routes";
import product_routes from "../management/ProductManagement/Product/setup/routes";

import order_routes from "../management/OrderManagement/setup/routes";
import trending_video_routes from "../management/TrendingVideo/setup/routes";


const routes = {
    path: "/",
    component: Layout,
    children: [
        {
            path: "dashboard",
            component: Dashboard,
            name: "SuperAdminDashboard",
        },

        slider_routes,
        product_category_routes,
        product_brand_routes,
        product_routes,

        order_routes,
        trending_video_routes,

    ],
};

export default routes;
