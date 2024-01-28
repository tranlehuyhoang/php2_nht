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
                        <li class="account__menu--list "><a href="/tai-khoan">Dashboard</a></li>
                        <li class="account__menu--list"><a href="/information">Information</a></li>
                        <li class="account__menu--list active"><a href="/reset-password">Reset Password</a></li>
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
                        <form method="POST" action="./reset-password" enctype="multipart/form-data">
                            <label for="current_password">Current Password:</label>
                            <input type="password" name="current_password" id="current_password" required>

                            <label for="new_password">New Password:</label>
                            <input type="password" name="new_password" id="new_password" required>

                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" name="confirm_password" id="confirm_password" required>

                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->
</main>