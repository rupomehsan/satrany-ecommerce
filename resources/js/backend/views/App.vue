<template>
    <div id="wrapper">
        <top-header></top-header>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>
        <!--End content-wrapper-->

        <!--start color switcher-->
        <div class="right-sidebar" :class="rightToggle ? 'right-toggled' : ''">
            <div class="switcher-icon" @click="rightToggle = !rightToggle">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1" @click="changeTheme('1')"></li>
                    <li id="theme2" @click="changeTheme('2')"></li>
                    <li id="theme3" @click="changeTheme('3')"></li>
                    <li id="theme4" @click="changeTheme('4')"></li>
                    <li id="theme5" @click="changeTheme('5')"></li>
                    <li id="theme6" @click="changeTheme('6')"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7" @click="changeTheme('7')"></li>
                    <li id="theme8" @click="changeTheme('8')"></li>
                    <li id="theme9" @click="changeTheme('9')"></li>
                    <li id="theme10" @click="changeTheme('10')"></li>
                    <li id="theme11" @click="changeTheme('11')"></li>
                    <li id="theme12" @click="changeTheme('12')"></li>
                    <li id="theme13" @click="changeTheme('13')"></li>
                    <li id="theme14" @click="changeTheme('14')"></li>
                    <li id="theme15" @click="changeTheme('15')"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { auth_store } from "../store/auth_store";
import TopHeader from './pages/super_admin/partials/TopHeader.vue'
export default {
    components: { TopHeader },
    data: () => ({
        rightToggle: false,
    }),
    created: async function () {

        if (!window.localStorage.getItem("token")) {
            window.location.href = window.location.origin;
        }
        await this.check_is_auth();

    },
    methods: {

        ...mapActions(auth_store, {
            check_is_auth: "check_is_auth",
        }),
        changeTheme(id) {
            const totalThemes = Array.from({ length: 15 }, (_, i) => i + 1);
            const newThemeNo = "bg-theme" + id;
            const body = document.getElementById('body');

            totalThemes.forEach((item) => {
                const currentThemeClass = 'bg-theme' + item;
                if (body.classList.contains(currentThemeClass)) {
                    body.classList.remove(currentThemeClass);
                }
            });

            body.classList.add(newThemeNo);
        }

    },

    watch: {
        is_auth: {
            handler: function (v) {
                let prev_url = window.sessionStorage.getItem("prevurl");

                switch (this.role.name) {
                    case "super_admin":
                    case "admin":
                        window.location.href = prev_url ?? `#/dashboard`;
                        break;
                    case "customer":
                        window.location.href = window.location.origin;
                        break;
                    default:
                        window.location.href = window.location.origin;
                }
            },
            deeps: true,
        },
    },

    computed: {
        ...mapState(auth_store, {
            is_auth: "is_auth",
            auth_info: "auth_info",
            role: "role",
        }),
    },

}
</script>

<style></style>
