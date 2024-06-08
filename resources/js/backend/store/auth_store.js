import axios from "axios";
import { defineStore } from "pinia";

export const auth_store = defineStore("auth_store", {
    state: () => ({
        is_auth: 0,
        auth_info: {},
        role: {},
        user_unseen_notification: {}
    }),
    getters: {},
    actions: {
        set_is_auth: function (status) {
            this.is_auth = status;
        },
        log_out: async function () {
            // await fetch("/logout", {
            //     method: "POST",
            //     headers: {
            //         "X-CSRF-TOKEN": document
            //             .querySelector('meta[name="csrf-token"]')
            //             .getAttribute("content"),
            //     },
            // });
            window.sessionStorage.removeItem("prevurl");
            localStorage.removeItem("token");
            return (location.href = "/login");
        },
        check_is_auth: async function () {
            let that = this;
            let res = await axios.get("/check_user");
            if (res.status != 200) {
                localStorage.removeItem("token");
                return (location.href = "/login");
            }
            that.auth_info = res.data.user;
            that.is_auth = 1;
            that.role = res.data.user.role;
        },
        get_user_unseen_notification: async function () {
            let response = await axios.get("user-notifications?get_all=1&seen=0");
            this.user_unseen_notification = response.data.data;
        },
    },
});
