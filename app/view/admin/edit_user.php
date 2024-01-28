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
                        $users = $_SESSION['user'];
                        echo '<h2 class="account__content--title h3 mb-20">Admin ' . $users['name'] . '</h2>';
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
                            $users = $_SESSION['user'];
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
                        <form class="contact__form--inner" action="/admin/update_user?id=<?php echo $user['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <input class="contact__form--input" name="user_id" id="input0" placeholder="ID User: <?php echo $user['id']; ?>" type="text" value="<?php echo $user['id']; ?>" hidden>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input1">Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="name" id="input1" placeholder="Name" type="text" value="<?php echo $user['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input2">First Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="first_name" id="input2" placeholder="First Name" type="text" value="<?php echo $user['first_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Last Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="last_name" id="input3" placeholder="Last Name" type="text" value="<?php echo $user['last_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Age <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="age" id="input3" placeholder="Age" type="text" value="<?php echo $user['age']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Company <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="company" id="input3" placeholder="Company" type="text" value="<?php echo $user['company']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Email <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="email" id="input3" placeholder="Email" type="text" value="<?php echo $user['email']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Password <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" disabled name="password" id="input3" placeholder="Password" type="text" value="<?php echo $user['password']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Address <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="address" id="input3" placeholder="Address" type="text" value="<?php echo $user['address']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Address 2 <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="address2" id="input3" placeholder="Address 2" type="text" value="<?php echo $user['address2']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Phone <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="phone" id="input3" placeholder="Phone" type="text" value="<?php echo $user['phone']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">City <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="city" id="input3" placeholder="City" type="text" value="<?php echo $user['city']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Country <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="country" id="input3" placeholder="Country" type="text" value="<?php echo $user['country']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Postal Code <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="postal_code" id="input3" placeholder="Postal Code" type="text" value="<?php echo $user['postal_code']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Role <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="is_admin" id="input3" placeholder="Role" type="text" value="<?php if ($user['is_admin'] == 1) {
                                                                                                                                                    echo "Admin";
                                                                                                                                                } elseif ($user['is_admin'] == 0) {
                                                                                                                                                    echo "Customer";
                                                                                                                                                } ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Date Created <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" disabled name="date_created" id="input3" placeholder="Date Created" type="text" value="<?php
                                                                                                                                                                    if (isset($user['date_created'])) {
                                                                                                                                                                        echo $user['date_created'];
                                                                                                                                                                    }
                                                                                                                                                                    ?>
">
                                    </div>
                                </div>
                            </div>
                            <button class="contact__form--btn primary__btn" type="submit" name="btn_submit_edit_user">Submit Now</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->
</main>