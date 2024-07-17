<template>
    <div class="container-fluid">
        <!--Start Dashboard Content-->

        <div class="card mt-3">
            <div class="card-content">
                <div class="row row-group m-0">
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ total_visitors }}
                                <span class="float-right"
                                    ><i class="fa fa-users"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Visitors
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ total_products }}
                                <span class="float-right"
                                    ><i class="fa fa-book"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total products
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ total_category }}
                                <span class="float-right"
                                    ><i class="fa fa-eye"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Categories
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ total_brand }}
                                <span class="float-right"
                                    ><i class="fa fa-envira"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Brands
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End Row-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Latest orders
                        <div class="card-action">
                            <div class="dropdown">
                                <a
                                    href="javascript:void();"
                                    class="dropdown-toggle dropdown-toggle-nocaret"
                                    data-toggle="dropdown"
                                >
                                    <i class="icon-options"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a
                                        class="dropdown-item"
                                        href="javascript:void();"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item"
                                        href="javascript:void();"
                                        >Another action</a
                                    >
                                    <a
                                        class="dropdown-item"
                                        href="javascript:void();"
                                        >Something else here</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a
                                        class="dropdown-item"
                                        href="javascript:void();"
                                        >Separated link</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li
                            class="list-group-item bg-transparent"
                            v-for="item in latest_orders"
                            :key="item.id"
                        >
                            <div class="media align-items-center">
                                <img
                                    :src="
                                        item.order_products.length > 0 &&
                                        item.order_products.length > 0
                                            ? item.order_products[0].product
                                                  ?.images[0]?.url
                                            : 'dummy.png'
                                    "
                                    alt="user avatar"
                                    class="customer-img rounded-circle"
                                />
                                <div class="media-body ml-3">
                                    <h6 class="mb-0">
                                        Name :
                                        {{
                                            item.first_name +
                                            " " +
                                            item.last_name
                                        }}
                                        <small class="ml-4"
                                            >{{
                                                new Date(
                                                    item.created_at
                                                ).toDateString()
                                            }}
                                        </small>
                                    </h6>
                                    <p class="mb-0 small-font">
                                        address : {{ item.address }}
                                    </p>
                                </div>
                                <div class="star">
                                    <router-link
                                        class="btn btn-sm btn-outline-warning mx-2"
                                        :to="`/orders/details?id=${item.id}`"
                                    >
                                        View Details
                                    </router-link>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Dashboard Content-->
        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->
</template>

<script>
export default {
    data: () => ({
        total_visitors: 0,
        total_products: 0,
        total_category: 0,
        total_brand: 0,
        latest_orders: [],
    }),

    created: async function () {
        await this.getDashboardData();
    },

    methods: {
        getDashboardData: async function () {
            await axios
                .get("/get-dashboard-info")
                .then((response) => {
                    console.log(response.data.data);
                    this.total_visitors = response.data.data.visitor;
                    this.total_products = response.data.data.product;
                    this.total_category = response.data.data.category;
                    this.total_brand = response.data.data.brand;
                    this.latest_orders = response.data.data.orders;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
