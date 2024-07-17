<template>
    <div class="product-wrapper single-featured mtb-15">
        <template v-if="product.discount_type === 'amount'">
            <div class="discount-badge">
                {{ product.discount_amount }} TK OFF
            </div>
        </template>
        <template v-else-if="product.discount_type === 'percentage'">
            <div class="discount-badge">
                {{ product.discount_amount }}% OFF
            </div>
        </template>
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
            <!-- <ul>
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
            </ul> -->
            <span>{{ product.current_price }} ৳</span>
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

<style lang="scss" scoped>
.product-wrapper {
    position: relative;
    .discount-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #e74c3c;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        z-index: 1;
    }
}
</style>
