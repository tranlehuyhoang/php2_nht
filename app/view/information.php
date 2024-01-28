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
                echo '<p class="account__welcome--text">Hello, <b>' . $users['name'] . '</b>!</p>';
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
                        if (isset($_SESSION['user']) && $users['is_admin'] == 1) {
                            echo '<a href="/admin" class="account__menu--list">Admin Dashboard</a><br>';
                        } elseif (isset($_SESSION['user']) && $users['is_admin'] == 0) {
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
                        <form method="POST" action="./information" enctype="multipart/form-data">
                            <label for="name">Name:</label>
                            <input type="hidden" name="id" value="<?php echo $users['id']; ?>">
                            <input type="text" name="name" id="name" value="<?php echo $users['name']; ?>">
                            <label for="first_name">First Name:</label>
                            <input type="text" name="first_name" id="first_name"
                                value="<?php echo $users['first_name']; ?>">
                            <label for="last_name">Last Name:</label>
                            <input type="text" name="last_name" id="last_name"
                                value="<?php echo $users['last_name']; ?>">
                            <label for="age">Age:</label>
                            <input type="text" name="age" id="age" value="<?php echo $users['age']; ?>">
                            <label for="company">Company:</label>
                            <input type="text" name="company" id="company" value="<?php echo $users['company']; ?>">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="<?php echo $users['email']; ?>">
                            <label for="address">Address:</label>
                            <input type="text" name="address" id="address" value="<?php echo $users['address']; ?>">
                            <label for="address2">Address 2:</label>
                            <input type="text" name="address2" id="address2" value="<?php echo $users['address2']; ?>">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone" value="<?php echo $users['phone']; ?>">
                            <label for="city">City:</label>
                            <input type="text" name="city" id="city" value="<?php echo $users['city']; ?>">
                            <label for="country">Country:</label>
                            <input type="text" name="country" id="country" value="<?php echo $users['country']; ?>">
                            <label for="postal_code">Postal Code:</label>
                            <input type="text" name="postal_code" id="postal_code"
                                value="<?php echo $users['postal_code']; ?>">


                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->
</main>