<template>
    <div class="row justify-content-end">
                <div class="col-md-8">
                    <div class="cart-table mb-50 bg-fff">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Action adad{{name}}</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart-item">
                                            <td class="product-remove">
                                                <a href="#" class="remove" title="Remove this item">X</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="frontend/assets/images/cart/1.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Lorem nec augue </a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amounte">$300.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <input value="1" min="1" type="number">
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="sub-total">$300.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td class="product-remove">
                                                <a href="#" class="remove" title="Remove this item">x</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="frontend/assets/images/cart/2.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Adipiscing cursus eu  </a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amounte">$600.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <input value="10" min="1" type="number">
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="sub-total">$600.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td class="product-remove">
                                                <a href="#" class="remove" title="Remove this item">x</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="frontend/assets/images/cart/3.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Cras nec nisl ut erat  </a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amounte">$165.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <input value="48" min="1" type="number">
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="sub-total">$165.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="actions clear">

                                                <div class="floatright mb-10">
                                                    <input class="button " name="update_cart" value="Update Cart" type="submit">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="table-content table-responsive mb-30">
                        <table>
                            <tbody><tr>
                                <td><strong>Subtotal</strong></td>
                                <td><b>$10,120.00</b></td>
                            </tr>
                            <tr>
                                <td><strong>Total</strong></td>
                                <td><b>$10,120.00</b></td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="simple-product-form contuct-form mb-30">
                        <form action="#">
                            <button>Proceed to Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
</template>

<script>
export default {
    name: 'ProductCards',
    props: ['name'],
};
</script>

<style></style>
