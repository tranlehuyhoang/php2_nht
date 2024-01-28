<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container-fluid">
            <div class="cart__section--inner">
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
                                        <!-- <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn" aria-label="search button" type="button">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg>
                                                    </button>
                                                    <div class="cart__thumbnail">
                                                        <a href="product-details.html"><img class="border-radius-5" src="/uploads/product1.png" alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a href="product-details.html">Fresh-whole-fish</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">$65.00</span>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <div class="quantity__box">
                                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                    <label>
                                                        <input type="number" class="quantity__number quickview__value--number" value="1" data-counter />
                                                    </label>
                                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price end">$130.00</span>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                                <div class="continue__shopping d-flex justify-content-between">
                                    <a class="continue__shopping--link" href="/cua-hang">Continue shopping</a>
                                    <button class="continue__shopping--clear" type="submit" onclick="clearCart()">Clear Cart</button>
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
                                            <!-- <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">GRAND TOTAL</td>
                                                <td class="cart__summary--amount text-right" id="grand-total" data-id="grand-total">$-</td>
                                            </tr> -->
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
                                        <!-- <li><a class="cart__summary--footer__btn primary__btn checkout" href="/checkout">Check Out</a></li> -->
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

<!-- Thêm vào phần cuối của file cart.php -->

<script>
    $(document).ready(function() {
        // Lấy danh sách sản phẩm từ LocalStorage
        var cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        function updateSubtotal() {
            var subtotal = cartItems.reduce(function(sum, item) {
                return sum + item.price * item.quantity;
            }, 0);

            // Hiển thị tổng giá trị với định dạng số
            $('#subtotal').text(`$${subtotal.toLocaleString()}`);
        }

        function updateCart() {
            // Cập nhật tổng tiền ở đây nếu cần

            // Lưu danh sách sản phẩm vào LocalStorage
            localStorage.setItem('cart', JSON.stringify(cartItems));


            // Cập nhật tổng giá trị
            updateSubtotal();
        }


        // User thay đổi số lượng
        $('.cart__table--body').on('click', '.quantity__value', function() {
            var productId = $(this).data('id');
            var quantityInput = $(`.quantity__number[data-id="${productId}"]`);
            var totalPriceElement = $(`.total-price[data-id="${productId}"]`);

            // Lấy thông tin sản phẩm từ danh sách
            var product = cartItems.find(item => item.id === productId);

            // User nhấn nút "Tăng" hay "Giảm"
            var action = $(this).hasClass('increase') ? 'increase' : 'decrease';

            if (action === 'increase') {
                product.quantity++;
            } else if (action === 'decrease' && product.quantity > 1) {
                product.quantity--;
            }

            // Cập nhật số lượng trong input
            quantityInput.val(product.quantity);

            // Cập nhật tổng giá trị theo thời gian thực
            var newTotalPrice = product.price * product.quantity;
            totalPriceElement.text(`$${newTotalPrice.toLocaleString()}`);

            // Cập nhật giỏ hàng và LocalStorage
            updateCart();
        });

        // User thay đổi số lượng bằng tay
        $('.cart__table--body').on('input', '.quantity__number', function() {
            var productId = $(this).data('id');
            var quantityInput = $(this);
            var totalPriceElement = $(`.total-price[data-id="${productId}"]`);

            // Lấy thông tin sản phẩm từ danh sách
            var product = cartItems.find(item => item.id === productId);

            // Kiểm tra và giới hạn số lượng nhập là số nguyên dương
            var newQuantity = parseInt(quantityInput.val()) || 1;
            if (newQuantity < 1) {
                newQuantity = 1;
            }

            // Cập nhật số lượng
            product.quantity = newQuantity;

            // Cập nhật tổng giá trị theo thời gian thực
            var newTotalPrice = product.price * newQuantity;
            totalPriceElement.text(`$${newTotalPrice.toLocaleString()}`);

            // Cập nhật giỏ hàng và LocalStorage
            updateCart();
        });

        // Bắt sự kiện khi người dùng nhấn nút xóa
        $('.cart__table--body').on('click', '.cart__remove--btn', function() {
            var productId = $(this).closest('tr').find('.quantity__number').data('id');

            // Lọc sản phẩm có id trùng khớp để xóa khỏi danh sách
            cartItems = cartItems.filter(item => item.id !== productId);

            // Xóa hàng trên giao diện
            $(this).closest('tr').remove();

            // Cập nhật giỏ hàng và LocalStorage
            updateCart();
        });

        // Hiển thị sản phẩm trên trang giỏ hàng và cập nhật tổng giá trị
        cartItems.forEach(function(item) {
            var totalPrice = item.price * item.quantity;

            var productRow = `
                <tr class="cart__table--body__items">
                    <td class="cart__table--body__list">
                        <div class="cart__product d-flex align-items-center">
                        <button class="cart__remove--btn" aria-label="search button" type="button">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg>
                                                    </button>
                            <!-- <div class="cart__thumbnail">
                                <a href="product-details.html">
                                    <img class="border-radius-5" src="/uploads/${item.id}.png" alt="${item.name}">
                                </a>
                            </div> -->
                            <div class="cart__content">
                                <h4 class="cart__content--title"><a href="product-details.html">${item.name}</a></h4>
                            </div>
                        </div>
                    </td>
                    <td class="cart__table--body__list">
                        <span class="cart__price">$${item.price.toLocaleString()}</span>
                    </td>
                    <td class="cart__table--body__list">
                        <div class="quantity__box">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value" data-id="${item.id}">-</button>
                            <label>
                                <input type="number" class="quantity__number" value="${item.quantity}" data-counter data-id="${item.id}" />
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value" data-id="${item.id}">+</button>
                        </div>
                    </td>
                    <td class="cart__table--body__list">
                        <span class="cart__price total-price" data-id="${item.id}">$${totalPrice.toLocaleString()}</span>
                    </td>
                </tr>
            `;

            $('.cart__table--body').append(productRow);
        });

        // Cập nhật tổng giá trị khi trang tải lên
        updateSubtotal();
    });

    function clearCart() {
        // Kiểm tra xem localStorage có chứa key "cart" hay không
        if (localStorage.getItem("cart")) {
            // Nếu có, xóa localStorage với key là "cart"
            localStorage.removeItem("cart");
            alert("Đã xóa giỏ hàng thành công!");
        } else {
            // Nếu không, hiển thị thông báo rằng giỏ hàng đã trống
            alert("Giỏ hàng đã trống!");
        }
    }
</script>