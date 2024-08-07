import { defineStore } from "pinia";

export const order_setup_store = defineStore("order_setup_store", {
    state: () => ({
        all_data: {},
        single_data: {},
        all_categories_data: {},
        all_brands_data: {},
        role_data: {},
        api:"sales-ecommerce-orders"
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {

        all: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(this.api);
            }
            this.all_data = response.data.data;
        },
        get_all_pending_order_data: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(`${this.api}?order_status=pending`);
            }
            this.all_data = response.data.data;
        },
        get_all_accepted_order_data: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(`${this.api}?order_status=accepted`);
            }
            this.all_data = response.data.data;
        },
        get_all_delivered_order_data: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(`${this.api}?order_status=delivered`);
            }
            this.all_data = response.data.data;
        },
        get_all_cancelled_order_data: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(`${this.api}?order_status=cancelled`);
            }
            this.all_data = response.data.data;
        },

        get: async function (id) {
            let response = await axios.get(`${this.api}/${id}`);
            response = response.data.data;
            this.single_data = response;
        },

        store: async function (form) {
            let formData = new FormData(form);
            let response = await axios.post(this.api, formData);
            return response;
        },

        update: async function (form, id) {
            let formData = new FormData(form);
            let response = await axios.post(`${this.api}/update/${id}?_method=PATCH`, formData);
            return response;
        },

        delete: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(`${this.api}/${id}`);
                window.s_alert("Data deleted");
                this.all();
                console.log(response.data);
            }
        },
        bulk_action: async function (action, data) {
            let response = await axios.post(`${this.api}/bulk-action`, { action, data })
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.all();
            }
        },

        // additional function
        // additional function

        get_all_categories: async function (id) {
            let response = await axios.get(`product-categories?get_all=1`);
            response = response.data.data;
            this.all_categories_data = response;
        },
        get_all_brands: async function (id) {
            let response = await axios.get(`product-brands?get_all=1`);
            response = response.data.data;
            this.all_brands_data = response;
        },

    },
});
