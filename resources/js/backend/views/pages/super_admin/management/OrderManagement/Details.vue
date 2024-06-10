<template>
    <div>
        <form @submit.prevent="submitHandler">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="text-capitalize">Order Details</h5>
                    <div>
                        <router-link
                            class="btn btn-outline-warning btn-sm"
                            :to="{ name: `All${route_prefix}` }"
                            >All {{ route_prefix }}</router-link
                        >
                    </div>
                </div>
                <div class="container my-5 card p-3">
                    <h5 class="text-capitalize text-center">Order products</h5>
                    <table class="table table-hover text-center table-bordered">
                        <thead>
                            <tr>
                                <th class="text-start">SL</th>
                                <th>Product Name</th>
                                <th>image</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>Sub total</th>

                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="(
                                    item, index
                                ) in single_data?.order_products"
                            >
                                <td class="text-start">{{ index + 1 }}</td>
                                <th>{{ item.product?.title }}</th>
                                <th>
                                    <img
                                        :src="
                                            item.product?.images.length
                                                ? item.product?.images[0].url
                                                : 'dummy.png'
                                        "
                                        alt=""
                                        height="50"
                                        width="100"
                                        style="object-fit: cover"
                                    />
                                </th>
                                <th>{{ item.product_price }}</th>
                                <th>{{ item.qty }}</th>
                                <th>{{ item.subtotal }}</th>

                                <td style="width: 100px">
                                    <div
                                        class="d-flex justify-content-between gap-2"
                                    >
                                        <a class="btn btn-sm btn-outline-danger"
                                            ><i class="fa fa-trash"></i
                                        ></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-end">Sub total</td>
                                <td colspan="1">{{ single_data?.subtotal }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-end">
                                    Delivery Charge
                                </td>
                                <td colspan="1">
                                    {{ single_data?.delivery_charge }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-end">Total</td>
                                <td colspan="1">{{ single_data?.total }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="w-50 mx-auto my-5">
                        <form @submit.prevent="submitHandler">
                            <input
                                type="hidden"
                                name="id"
                                :value="single_data.id"
                            />
                            <select
                                name="order_status"
                                id=""
                                class="form-control"
                                v-model="single_data.order_status"
                            >
                                <option value="pending">Pending</option>
                                <option value="accepted">Accepted</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary mt-3">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { order_setup_store } from "./setup/store";
import setup from "./setup";
import form_fields from "./setup/form_fields";

export default {
    data: () => ({
        route_prefix: "",
        form_fields,
        param_id: null,
        order_status: "pending",
    }),
    created: async function () {
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;

        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            if (this.single_data) {
                this.order_status = this.single_data.order_status;
            }
        }
    },
    methods: {
        ...mapActions(order_setup_store, {
            get_all_data: "all",
            get_single_data: "get",
            store_data: "store",
            update_data: "update",

            get_all_categories: "get_all_categories",
            get_all_brands: "get_all_brands",
        }),

        submitHandler: async function ($event) {
            let response = await this.update_data($event.target, this.param_id);
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.$router.push({ name: `All${this.route_prefix}` });
            }
        },

        setSummerEditor() {
            var markupStr = $("#description").summernote("code");
            var target = document.createElement("input");
            target.setAttribute("name", "description");
            target.value = markupStr;
            document.getElementById("description").appendChild(target);
        },
    },

    computed: {
        ...mapState(order_setup_store, {
            single_data: "single_data",
            all_data: "all_data",

            all_categories_data: "all_categories_data",
            all_brands_data: "all_brands_data",
        }),
    },
};
</script>
