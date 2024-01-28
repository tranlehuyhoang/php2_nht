<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container-fluid">
            <div class="cart__section--inner">
            <a class="continue__shopping--link" href="/cua-hang"><< Continue shopping</a>
                <form action="#">
                    <h2 class="cart__title mb-40">Shopping Cart</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart__table">
                                <table class="cart__table--inner">
                                    <thead class="cart__table--header">
                                        <tr class="cart__table--header__items">
                                            <th class="cart__table--header__list">Product</th>
                                            <th class="cart__table--header__list">Price</th>
                                            <th class="cart__table--header__list">Quantity</th>
                                            <th class="cart__table--header__list">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__table--body body-table-product">
                                        <?php if (isset($_GET['cleared'])) : ?>
                                            <div class="cart__success-message">Cart has been cleared successfully!</div>
                                        <?php endif; ?>

                                        <?php if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
                                            <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                                                <tr class="cart__table--body__items">
                                                    <td class="cart__table--body__list">
                                                        <div class="cart__product d-flex align-items-center">
                                                            <!-- <button class="cart__remove--btn" aria-label="search button" type="button">
                                                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                                    <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                                </svg>
                                                            </button> -->
                                                            <div class="cart__content">
                                                                <h4 class="cart__content--title"><p><?php echo $cartItem[2]; ?></p></h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price"><?php echo '$' . number_format($cartItem[3], 0); ?></span>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <div class="quantity__box">
                                                            <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                            <label>
                                                                <input type="number" class="quantity__number quickview__value--number" value="<?php echo (int)$cartItem[1]; ?>" data-counter />
                                                            </label>
                                                            <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price end"><?php echo '$' . number_format((float)$cartItem[1] * (float)$cartItem[3], 0); ?></span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <div class="cart__empty-message">Your cart is empty.</div>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <div class="continue__shopping d-flex justify-content-between">
                                    <a href="/clear-cart" class="cart__summary--footer__btn primary__btn">Clear Cart</a>
                                    <button type="submit" class="cart__summary--footer__btn primary__btn" name="updateCart">Cập nhật giỏ hàng</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart__summary border-radius-10">
                                <div class="cart__summary--total mb-20">
                                    <table class="cart__summary--total__table">
                                        <tbody>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">SUBTOTAL</td>
                                                <td class="cart__summary--amount text-right" id="subtotal" data-id="subtotal">$-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="cart__summary--footer">
                                    <ul class="d-flex justify-content-between">
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            echo '<li><a class="cart__summary--footer__btn primary__btn checkout" href="/checkout">Check Out</a></li>';
                                        } else {
                                            echo '<li><a class="cart__summary--footer__btn primary__btn" href="/tai-khoan">Login</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- cart section end -->
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function updateSubtotal() {
            var subtotalElement = document.getElementById('subtotal');
            var cartTableBody = document.querySelector('.body-table-product');

            var total = 0;

            var cartRows = cartTableBody.querySelectorAll('.cart__table--body__items');
            cartRows.forEach(function (row) {
                var quantity = parseInt(row.querySelector('.quantity__number').value);
                var price = parseFloat(row.querySelector('.cart__price').textContent.replace('$', '').replace(',', '').replace(',', ''));
                var rowTotal = quantity * price;
                total += rowTotal;
            });

            subtotalElement.textContent = '$' + total.toLocaleString();
        }

        var quantityInputs = document.querySelectorAll('.quantity__number');
        quantityInputs.forEach(function (input) {
            input.addEventListener('input', updateSubtotal);
        });

        updateSubtotal();
    });
</script>

