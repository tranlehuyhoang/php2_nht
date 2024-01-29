<div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian">

                <main class="main__content_wrapper">
                    <form action="" method="post" id="checkoutForm">
                        <div class="checkout__content--step section__contact--information">
                            <div
                                class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                <h2 class="section__header--title h3">Contact information</h2>
                            </div>
                            <?php if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
                            <?php $total = 0; ?>
                            <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                            <?php $total += (float)$cartItem[1] * (float)$cartItem[3]; ?>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <?php endif; ?>
                            <input type="number" hidden name="total_price" value="<?php echo $total ?>">

                            <div class="customer__information">
                                <div class="checkout__email--phone mb-12">
                                    <label>
                                        <!-- <input class="checkout__input--field border-radius-5" placeholder="Email" type="text"> -->
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            $user = $_SESSION['user'];
                                            if (isset($user['email'])) {
                                                echo "<input class='checkout__input--field border-radius-5' value=" . $user['email'] . " type='text' name='email'>";
                                            } else {
                                                echo "<input class='checkout__input--field border-radius-5' placeholder='Email' type='text' name='email'>";
                                            }
                                        } else {
                                            echo "<input class='checkout__input--field border-radius-5' placeholder='Email' type='text' name='email'>";
                                        }
                                        ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h3 class="section__header--title">Shipping address</h3>
                            </div>
                            <div class="section__shipping--address__content">
                                <div class="row">
                                    <div class="col-lg-6 mb-12">
                                        <div class="checkout__input--list ">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['first_name'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['first_name'] . " type='text' name='first_name'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='First name (optional)' type='text' name='first_name'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='First name (optional)' type='text' name='first_name'>";
                                                }
                                                ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['last_name'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['last_name'] . " type='text' name='last_name'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='Last name (optional)' type='text' name='last_name'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='Last name (optional)' type='text' name='last_name'>";
                                                }
                                                ?>
                                                <!-- <input class="checkout__input--field border-radius-5" placeholder="Last name" type="text" name="last_name"> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['company'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['company'] . " type='text' name='company'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='Company (optional)' type='text' name='company'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='Company (optional)' type='text' name='company'>";
                                                }
                                                ?>
                                                <!-- <input class="checkout__input--field border-radius-5" placeholder="Company (optional)" type="text" name="company"> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['address'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['address'] . " type='text' name='address'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='Address (optional)' type='text' name='address'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='Address (optional)' type='text' name='address'>";
                                                }
                                                ?>
                                                <!-- <input class="checkout__input--field border-radius-5" placeholder="Address" type="text" name="address"> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['phone'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['phone'] . " type='text' name='phone'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='Phone (optional)' type='text' name='phone'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='Phone (optional)' type='text' name='phone'>";
                                                }
                                                ?>
                                                <!-- <input class="checkout__input--field border-radius-5" placeholder="Phone" type="text" name="phone"> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['city'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['city'] . " type='text' name='city'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='City (optional)' type='text' name='city'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='City (optional)' type='text' name='city'>";
                                                }
                                                ?>
                                                <!-- <input class="checkout__input--field border-radius-5" placeholder="City" type="text" name="city"> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-12">
                                        <div class="checkout__input--list checkout__input--select select">
                                            <label class="checkout__select--label" for="country">Country/region</label>
                                            <select class="checkout__input--select__field border-radius-5" id="country"
                                                name="country">
                                                <option value="vietnam">Viet Nam</option>
                                                <option value="usa">United States</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    $user = $_SESSION['user'];
                                                    if (isset($user['postal_code'])) {
                                                        echo "<input class='checkout__input--field border-radius-5' value=" . $user['postal_code'] . " type='text' name='postal_code'>";
                                                    } else {
                                                        echo "<input class='checkout__input--field border-radius-5' placeholder='Postal Code (optional)' type='text' name='postal_code'>";
                                                    }
                                                } else {
                                                    echo "<input class='checkout__input--field border-radius-5' placeholder='Postal Code (optional)' type='text' name='postal_code'>";
                                                }
                                                ?>
                                                <!-- <input class="checkout__input--field border-radius-5" placeholder="Postal code" type="text" name="post_code"> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">

                                            <label>
                                                <select class="checkout__input--field border-radius-5" name="payment">
                                                    <option value="COD">COD</option>
                                                    <option value="Banking Online">Banking Online (gửi QR qua email cho
                                                        người dùng)</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__content--step__footer d-flex align-items-center">
                            <a class="previous__link--content" href="/cart">Return to cart</a>
                            <button class="continue__shipping--btn primary__btn border-radius-5"
                                type="submit">Finished</button>
                        </div>
                    </form>
                </main>

                <header class="main__header checkout__mian--header mb-30">
                    <details class="order__summary--mobile__version">
                        <summary class="order__summary--toggle border-radius-5">
                            <span class="order__summary--toggle__inner">
                                <span class="order__summary--toggle__icon">
                                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="order__summary--toggle__text show">
                                    <span>Show order summary</span>
                                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg"
                                        class="order-summary-toggle__dropdown" fill="currentColor">
                                        <path
                                            d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z">
                                        </path>
                                    </svg>
                                </span>
                            </span>
                        </summary>
                        <div class="order__summary--section">
                            <div class="cart__table checkout__product--table">
                                <table class="summary__table">
                                    <?php if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
                                    <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                                    <tbody class="summary__table--body">
                                        <tr class=" summary__table--items">
                                            <td class=" summary__table--list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a
                                                                href="product-details.html"><?php echo $cartItem[2]; ?></a>
                                                        </h3>
                                                        <span class="product__description--variant"
                                                            style="color: black">Quantity:
                                                            <?php echo (int)$cartItem[1]; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=" summary__table--list">
                                                <span
                                                    class="cart__price"><?php echo '$' . number_format((float)$cartItem[1] * (float)$cartItem[3], 0); ?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                    <?php else : ?>
                                    <div class="cart__empty-message">Your cart is empty.</div>
                                    <?php endif; ?>
                                </table>
                            </div>

                            <div class="checkout__total">
                                <table class="checkout__total--table">
                                    <tbody class="checkout__total--body">
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">Subtotal </td>
                                            <td class="checkout__total--amount text-right" id="subtotal2">$860.00</td>
                                        </tr>
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">Shipping</td>
                                            <td class="checkout__total--calculated__text text-right">5%</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="checkout__total--footer">
                                        <tr class="checkout__total--footer__items">
                                            <td
                                                class="checkout__total--footer__title checkout__total--footer__list text-left">
                                                Total </td>
                                            <td class="checkout__total--footer__amount checkout__total--footer__list text-right"
                                                id="totalCheckout2">$860.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </details>
                </header>
            </div>
            <aside class="checkout__sidebar sidebar">
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <?php if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
                        <?php $total = 0; ?>
                        <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                        <?php $total += (float)$cartItem[1] * (float)$cartItem[3]; ?>
                        <tbody class="cart__table--body">
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="product__image two  d-flex align-items-center">
                                        <div class="product__description">
                                            <h3 class="product__description--name h4"><a
                                                    href="#"><?php echo $cartItem[2]; ?></a></h3>
                                            <span class="product__description--variant" style="color: black">Quantity:
                                                <?php echo (int)$cartItem[1]; ?></span>
                                            <input class="quantity_number" type="hidden"
                                                value="<?php echo (int)$cartItem[1]; ?>">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span
                                        class="cart__price"><?php echo '$' . number_format((float)$cartItem[1] * (float)$cartItem[3], 0); ?></span>

                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <div class="cart__empty-message">Your cart is empty.</div>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="checkout__total">
                    <table class="checkout__total--table">
                        <tbody class="checkout__total--body">
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Subtotal </td>
                                <td class="checkout__total--amount text-right" id="subtotal1">$860.00</td>
                            </tr>
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">Shipping</td>
                                <td class="checkout__total--calculated__text text-right">5%</td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total
                                </td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right"
                                    id="totalCheckout1">$860.00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </aside>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function updateSubtotalAndTotal() {
        var subtotalElement = document.getElementById('subtotal1');
        var totalElement = document.getElementById('totalCheckout1');
        var cartTableBody = document.querySelector('.cart__table--inner');

        var subtotal = 0;

        var cartRows = cartTableBody.querySelectorAll('.cart__table--body__items');
        cartRows.forEach(function(row) {
            var quantity = parseInt(row.querySelector('.quantity_number').value);
            var price = parseFloat(row.querySelector('.cart__price').textContent.replace('$', '')
                .replace(',', '').replace(',', ''));
            var rowTotal = price;
            subtotal += rowTotal;
        });

        subtotalElement.textContent = '$' + subtotal.toLocaleString();

        // Tính total bằng cách thêm 5% vào subtotal
        var total = subtotal * 1.05;
        totalElement.textContent = '$' + total.toLocaleString();
    }

    var quantityInputs = document.querySelectorAll('.quantity_number');
    quantityInputs.forEach(function(input) {
        input.addEventListener('input', updateSubtotalAndTotal);
    });

    updateSubtotalAndTotal();
});
</script>