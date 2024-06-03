import { defineStore } from "pinia";

export const page_store = defineStore("page_store", {
    state: () => ({
        all_products_data: {},

    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {

        get_all_feature_products: async function () {
            let response = await axios.get("get-all-carts?get_all=true");
            this.all_products_data = response.data.data;
        },


    },
});
