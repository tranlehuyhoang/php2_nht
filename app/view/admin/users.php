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
                        <li class="account__menu--list active"><a href="/admin/users">Users</a></li>
                        <li class="account__menu--list"><a href="/admin/orders">Orders</a></li>
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
                        <h2 class="account__content--title h3 mb-20">List Users | <em><a href="/admin/add_user">Add User</a></em></h2>
                        <div class="account__table--area">
                            <table class="account__table">
                                <thead class="account__table--header">
                                    <tr class="account__table--header__child">
                                        <th class="account__table--header__child--items">#</th>
                                        <th class="account__table--header__child--items">ID</th>
                                        <th class="account__table--header__child--items">Name</th>
                                        <th class="account__table--header__child--items">Email</th>
                                        <th class="account__table--header__child--items">Role</th>
                                        <th class="account__table--header__child--items">Date Created</th>
                                        <th class="account__table--header__child--items">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    <?php
                                    $stt = 1;
                                    foreach ($users as $user) :
                                    ?>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#<?php echo $stt; ?></td>
                                            <td class="account__table--body__child--items"><?php echo $user['id']; ?></td>
                                            <td class="account__table--body__child--items"><?php echo $user["name"] ?></td>
                                            <td class="account__table--body__child--items"><?php echo $user["email"] ?></td>
                                            <td class="account__table--body__child--items">
                                                <?php
                                                if ($user["is_admin"] == 1) {
                                                    echo "Admin";
                                                }else{
                                                    echo "Customer";
                                                }
                                                ?>
                                            </td>
                                            <td class="account__table--body__child--items"><?php echo $user["date_created"] ?></td>
                                            <td class="account__table--body__child--items">
                                                <a href="/admin/edit_user?id=<?php echo $user['id']; ?>"><button class="primary__btn">Edit</button></a>
                                                <a href="/admin/delete_user?id=<?php echo $user['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa user này không?')"><button class="primary__btn">Delete</button></a>
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
                                    foreach ($users as $user) :
                                    ?>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>#</strong>
                                                <span>#<?php echo $stt; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>ID</strong>
                                                <span><?php echo $user['id']; ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Image</strong>
                                                <span><img class="" src="public/uploads/<?php echo $user['image']; ?>" alt="product-img" width="30px"></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Name</strong>
                                                <span><?php echo $user["name"] ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Price</strong>
                                                <span>$<?php echo number_format($user["price"]) ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Quantity</strong>
                                                <span><?php echo $user["quantity"] ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date Created</strong>
                                                <span><?php echo $user["date_created"] ?></span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Action</strong>
                                                <span>
                                                    <button>Edit</button>
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