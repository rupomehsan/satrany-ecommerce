import Layout from "./Layout.vue";
import Dashboard from "../Dashboard.vue";

// import user_routes from "../management/user/setup/routes";


const routes = {
    path: "/",
    component: Layout,
    children: [
        {
            path: "dashboard",
            component: Dashboard,
            name: "SuperAdminDashboard",
        },

        // user_routes,

    ],
};

export default routes;
