<head>
    <meta charset="utf-8">
    <title>Suruchi - Fashion eCommerce HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="./../app/view/inc/assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="./../app/view/inc/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="./../app/view/inc/assets/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="./../app/view/inc/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="./../app/view/inc/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <!-- <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p> -->
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user'];
                        echo '<h2 class="account__content--title h3 mb-20">Admin ' . $user['name'] . '</h2>';
                    }
                    ?>
                    <ul class="account__menu">
                        <li class="account__menu--list"><a href="/admin">Dashboard</a></li>
                        <li class="account__menu--list"><a href="/admin/categories">Categories</a></li>
                        <li class="account__menu--list"><a href="/admin/products">Products</a></li>
                        <li class="account__menu--list"><a href="/admin/users">Users</a></li>
                        <li class="account__menu--list active"><a href="/admin/orders">Orders</a></li>
                        <hr>
                        <?php
                        // Kiểm tra xem có thông tin người dùng trong session hay không
                        if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user'];
                            echo '<a href="/logout" class="account__menu--list">Log Out</a>';
                        } else {
                            echo '<p class="account__welcome--text">Vui lòng đăng nhập để xem thông tin tài khoản của bạn.</p>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="account__wrapper">
                    <div class="account__content">
                        <h2 class="account__content--title h3 mb-20">List Products | <em><a href="/admin/add_product">Add Product</a></em></h2>
                        <div class="account__table--area">
                            <table class="account__table">
                                <thead class="account__table--header">
                                    <tr class="account__table--header__child">
                                        <th class="account__table--header__child--items">ID</th>
                                        <th class="account__table--header__child--items">Email</th>
                                        <th class="account__table--header__child--items">Total Price</th>
                                        <th class="account__table--header__child--items">Payment</th>
                                        <th class="account__table--header__child--items">Status</th>
                                        <th class="account__table--header__child--items">Time</th>
                                        <th class="account__table--header__child--items">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    <?php
                                    $stt = 1;
                                    foreach ($orders as $order) :
                                    ?>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items"><?php echo $order['id']; ?></td>
                                            <td class="account__table--body__child--items"><?php echo $order['email']; ?>
                                            </td>


                                            <td class="account__table--body__child--items">
                                                $<?php echo number_format($order['total_price']); ?></td>
                                            <td class="account__table--body__child--items"><?php echo $order['payment']; ?>
                                            </td>
                                            <td class="account__table--body__child--items"><?php echo $order['status']; ?>
                                            </td>
                                            <td class="account__table--body__child--items"><?php echo $order['time']; ?>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <button><a href="/order_detail?id=<?php echo $order['id']; ?>">View</a></button>
                                                <button>Delete</button>
                                            </td>
                                        </tr>
                                    <?php
                                        $stt++;
                                    endforeach;
                                    ?>
                                </tbody>
                                <tbody class="account__table--body mobile__block">
                                    <?php
                                    $stt = 1;
                                    foreach ($orders as $order) :
                                    ?>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>#</strong>
                                                <span>#<?php echo $stt; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>ID</strong>
                                                <span><?php echo $order['id']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Email</strong>
                                                <span><?php echo $order['email']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>First Name</strong>
                                                <span><?php echo $order['first_name']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Last Name</strong>
                                                <span><?php echo $order['last_name']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Company</strong>
                                                <span><?php echo $order['company']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Address</strong>
                                                <span><?php echo $order['address']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Phone</strong>
                                                <span><?php echo $order['phone']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>City</strong>
                                                <span><?php echo $order['city']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Country</strong>
                                                <span><?php echo $order['country']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Postal Code</strong>
                                                <span><?php echo $order['postal_code']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total Price</strong>
                                                <span>$<?php echo number_format($order['total_price']); ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment</strong>
                                                <span><?php echo $order['payment']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Status</strong>
                                                <span><?php echo $order['status']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Time</strong>
                                                <span><?php echo $order['time']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Action</strong>
                                                <span>
                                                    <button><a href="">View</a></button>
                                                    <button>Delete</button>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php
                                        $stt++;
                                    endforeach;
                                    ?>
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