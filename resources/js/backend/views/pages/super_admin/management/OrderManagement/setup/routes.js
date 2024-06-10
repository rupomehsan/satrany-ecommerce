import setup from ".";
import All from "../All.vue";
import Pending from "../Pending.vue";
import Accepted from "../Accepted.vue";
import Delivered from "../Delivered.vue";
import Canceled from "../Canceled.vue";
import Details from "../Details.vue";

import Layout from "./Layout.vue";

let route_prefix = setup.route_prefix;

const routes =
{
    path: 'orders',
    component: Layout,
    children: [
        {
            path: '',
            name: "All" + route_prefix,
            component: All,
        },
        {
            path: '',
            name: "Pending" + route_prefix,
            component: Pending,
        },
        {
            path: '',
            name: "Accepted" + route_prefix,
            component: Accepted,
        },
        {
            path: '',
            name: "Delivered" + route_prefix,
            component: Delivered,
        },
        {
            path: '',
            name: "Canceled" + route_prefix,
            component: Canceled,
        },
        {
            path: 'details',
            name: "Details" + route_prefix,
            component: Details,
        },


    ]
};


export default routes;
