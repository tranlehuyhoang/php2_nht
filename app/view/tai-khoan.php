<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <?php
            // Kiểm tra xem có thông tin người dùng trong session hay không
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                echo '<p class="account__welcome--text">Hello, <b>' . $user['name'] . '</b>!</p>';
            } else {
                echo '<p class="account__welcome--text">Vui lòng đăng nhập để xem thông tin tài khoản của bạn.</p>';
            }
            ?>
            <!-- <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p> -->
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h2 class="account__content--title h3 mb-20">My Profile</h2>
                    <ul class="account__menu">
                        <li class="account__menu--list active"><a href="/tai-khoan">Dashboard</a></li>
                        <li class="account__menu--list"><a href="/information">Information</a></li>
                        <hr>
                        <?php
                        if (isset($_SESSION['user']) && $user['is_admin'] == 1) {
                            echo '<a href="/admin" class="account__menu--list">Admin Dashboard</a><br>';
                        } elseif (isset($_SESSION['user']) && $user['is_admin'] == 0) {
                            echo 'You are customer';
                        }
                        ?>
                        <?php
                        // Kiểm tra xem có thông tin người dùng trong session hay không
                        if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user'];
                            echo '<a href="/logout" class="account__menu--list">Log Out</a>';
                        } else {
                            echo '<p class="account__welcome--text">Vui lòng đăng nhập để xem thông tin tài khoản của bạn.</p>';
                        }
                        ?>
                        <!-- <li class="account__menu--list"><a href="login.html">Log Out</a></li> -->
                    </ul>
                </div>
                <div class="account__wrapper">
                    <div class="account__content">
                        <h2 class="account__content--title h3 mb-20">Orders History</h2>
                        <div class="account__table--area">
                            <table class="account__table">
                                <thead class="account__table--header">
                                    <tr class="account__table--header__child">
                                        <th class="account__table--header__child--items">Order</th>
                                        <th class="account__table--header__child--items">Date</th>
                                        <th class="account__table--header__child--items">Payment</th>
                                        <th class="account__table--header__child--items">Status</th>
                                        <th class="account__table--header__child--items">Total</th>
                                        <th class="account__table--header__child--items">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    <?php foreach ($orders as $order) : ?>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#<?php echo $order['id'] ?></td>
                                            <td class="account__table--body__child--items"><?php echo $order['time'] ?></td>
                                            <td class="account__table--body__child--items"><?php echo $order['payment'] ?></td>
                                            <td class="account__table--body__child--items"><?php echo $order['status'] ?></td>
                                            <td class="account__table--body__child--items"><?php echo $order['total_price'] ?></td>
                                            <td class="account__table--body__child--items">
                                                <a href="/order_detail?id=<?php echo $order['id'] ?>"><button class="primary__btn">Detail</button></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                                <tbody class="account__table--body mobile__block">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->
</main>