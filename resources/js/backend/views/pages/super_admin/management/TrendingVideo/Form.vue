<template>
    <div>
        <form @submit.prevent="submitHandler">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="text-capitalize">
                        {{ param_id ? "Update" : "Create" }} new
                        {{ route_prefix }}
                    </h5>
                    <div>
                        <router-link
                            class="btn btn-outline-warning btn-sm"
                            :to="{ name: `All${route_prefix}` }"
                            >All {{ route_prefix }}</router-link
                        >
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div
                            class="col-md-12"
                            v-for="(form_field, index) in form_fields"
                            :key="index"
                        >
                            <common-input
                                :label="form_field.label"
                                :type="form_field.type"
                                :name="form_field.name"
                                :multiple="form_field.multiple"
                                :value="form_field.value"
                                :data_list="form_field.data_list"
                                :onchange="ulrType"
                            />
                        </div>

                        <div class="col-md-12" v-if="is_video">
                            <div>
                                <label for=""> Upload Video</label>
                                <input
                                    class="form-control mb-2"
                                    type="file"
                                    accept=".mp4,.mkv,.mov,.avi"
                                    name="video"
                                />
                            </div>
                        </div>
                        <div v-if="is_video">
                            <video width="200" height="200" controls v-if="url">
                                <source
                                    :src="`/uploads/${url}`"
                                    type="video/mp4"
                                />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="form-group">
                        <button
                            type="submit"
                            class="btn btn-light btn-square px-5"
                        >
                            <i class="icon-lock"></i> Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { trending_video_setup_store } from "./setup/store";
import setup from "./setup";
import form_fields from "./setup/form_fields";

export default {
    data: () => ({
        route_prefix: "",
        form_fields,
        param_id: null,
        is_video: false,
        url: "",
    }),
    created: async function () {
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;
        await this.get_all_data();
        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            if (this.single_data) {
                this.form_fields.forEach((field, index) => {
                    Object.entries(this.single_data).forEach((value) => {
                        if (field.name == value[0]) {
                            this.form_fields[index].value = value[1];
                        }
                    });
                });

                this.url = this.single_data.url;

                if (this.single_data.type == "url") {
                    this.is_video = true;
                    let target = document.getElementById("url");
                    target.classList.add("d-none");
                    let parentDiv = target.parentElement;
                    if (parentDiv && parentDiv.nodeType === 1) {
                        parentDiv.classList.add("d-none");
                        let label = parentDiv.previousElementSibling;
                        if (label && label.nodeType === 1) {
                            label.classList.add("d-none");
                        }
                    }
                }
            }
        } else {
            this.form_fields.forEach((item) => {
                item.value = "";
            });
        }
    },
    methods: {
        ...mapActions(trending_video_setup_store, {
            get_all_data: "all",
            get_single_data: "get",
            store_data: "store",
            update_data: "update",
        }),

        submitHandler: async function ($event) {
            if (this.param_id) {
                let response = await this.update_data(
                    $event.target,
                    this.param_id
                );
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            } else {
                let response = await this.store_data($event.target);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            }
        },

        ulrType(event) {
            if (event.target.value == "url") {
                this.is_video = true;
                let target = document.getElementById("url");
                target.classList.add("d-none");
                let parentDiv = target.parentElement;
                if (parentDiv && parentDiv.nodeType === 1) {
                    parentDiv.classList.add("d-none");
                    let label = parentDiv.previousElementSibling;
                    if (label && label.nodeType === 1) {
                        label.classList.add("d-none");
                    }
                }
            } else {
                this.is_video = false;
                let target = document.getElementById("url");
                target.classList.remove("d-none");
                let parentDiv = target.parentElement;
                if (parentDiv && parentDiv.nodeType === 1) {
                    parentDiv.classList.remove("d-none");
                    let label = parentDiv.previousElementSibling;
                    if (label && label.nodeType === 1) {
                        label.classList.remove("d-none");
                    }
                }
            }
        },
    },

    computed: {
        ...mapState(trending_video_setup_store, {
            single_data: "single_data",
            all_data: "all_data",
        }),
    },
};
</script>
