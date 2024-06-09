<template>
    <div class="product-wrapper single-featured mtb-15">
        <div class="product-img floatleft">
            <Link :href="`/product-details/${product.slug}`">
                <img
                    :src="`/${
                        product.images.length
                            ? product.images[0].url
                            : 'dummy.png'
                    }`"
                    alt=""
                    class="primary"
                />
                <img
                    :src="`/${
                        product.images.length
                            ? (product.images[1]?.url ??'dummy.png')
                            : 'dummy.png'
                    }`"
                    alt=""
                    class="secondary"
                />
            </Link>
        </div>
        <div class="product-content floatleft">
            <h3>
                <Link :href="`product-details/${product.slug}`">{{
                    product.title
                }}</Link>
            </h3>
            <ul>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                </li>
            </ul>
            <span>{{ product.price }} ৳</span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        product: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style lang="scss" scoped></style>
