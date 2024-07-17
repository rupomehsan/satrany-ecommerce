<template>
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper">
        <div class="brand-logo">
            <router-link
                :to="{ name: `SuperAdminDashboard` }"
                class="d-flex align-items-center"
            >
                <img
                    src="/backend/assets/images/logo-icon.png"
                    class="logo-icon"
                    alt="logo icon"
                />
                <h5 class="logo-text">Ecommerce Admin</h5>
            </router-link>
            <div class="close-btn">
                <i class="zmdi zmdi-close" @click="toggle_menu"></i>
            </div>
        </div>
        <div class="m-2">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
        <hr />
        <ul class="metismenu" id="menu">
            <li>
                <router-link
                    :to="{ name: `SuperAdminDashboard` }"
                    class="border"
                    href="javascript:void();"
                >
                    <div class="parent-icon">
                        <i class="zmdi zmdi-view-dashboard"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </router-link>
            </li>

            <side-bar-single-menu
                :menu_title="`Slider`"
                :route_name="`AllSlider`"
                :icon="`fa fa-plus`"
            />

            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Product Management`"
                :menus="[
                    {
                        route_name: `AllProductCategory`,
                        title: `Categories`,
                    },
                    {
                        route_name: `AllProductBrand`,
                        title: `Brands`,
                    },

                    {
                        route_name: `AllProduct`,
                        title: `Products`,
                    },
                ]"
            />
            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Order Management`"
                :menus="[
                    {
                        route_name: `AllOrder`,
                        title: `All Order`,
                    },
                    {
                        route_name: `PendingOrder`,
                        title: `Pending Order`,
                    },
                    {
                        route_name: `AcceptedOrder`,
                        title: `Accepted Order`,
                    },
                    {
                        route_name: `DeliveredOrder`,
                        title: `Delivered Order`,
                    },
                    {
                        route_name: `CanceledOrder`,
                        title: `Canceled Order`,
                    },
                ]"
            />
            <side-bar-single-menu
                :menu_title="`Trending Video`"
                :route_name="`AllTrendingVideo`"
                :icon="`fa fa-plus`"
            />
        </ul>
    </div>
</template>

<script>
import { mapActions } from "pinia";
import { auth_store } from "../../../../store/auth_store";
import SideBarDropDownMenus from "./SideBarDropDownMenus.vue";
import SideBarSingleMenu from "./SideBarSingleMenu.vue";

export default {
    data: () => ({
        showSidebar: true,
    }),
    components: { SideBarDropDownMenus, SideBarSingleMenu },
    methods: {
        toggle_menu: function () {
            document.getElementById("wrapper").classList.toggle("toggled");
        },
    },
};
</script>

<style></style>
