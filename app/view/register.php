<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="container">
            <form action="/register" method="post">
                <div class="login__section--inner">
                    <div class="row row-cols-md-1 row-cols-1">
                        <div class="col">
                            <div class="account__login register">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                    <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    <?php
                                    if (isset($_GET['registerFailed'])) {
                                        if ($_GET['registerFailed'] == 1) {
                                            echo '<div class="alert alert-danger" role="alert">Vui lòng điền đầy đủ thông tin!</div>';
                                        } elseif ($_GET['registerFailed'] == 2) {
                                            echo '<div class="alert alert-danger" role="alert">Mật khẩu và xác nhận mật khẩu không khớp!</div>';
                                        } elseif ($_GET['registerFailed'] == 3) {
                                            echo '<div class="alert alert-danger" role="alert">Email đã được sử dụng, vui lòng chọn email khác!</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" placeholder="Name" type="text" name="name">
                                    <input class="account__login--input" placeholder="Email" type="email" name="email">
                                    <input class="account__login--input" placeholder="Password" type="password" name="password">
                                    <input class="account__login--input" placeholder="Confirm Password" type="password" name="confirm_password">
                                    <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
                                </div>
                                <div class="account__login--divide">
                                    <span class="account__login--divide__text">OR</span>
                                </div>
                                <p class="account__login--signup__text">Have an Account? <a href="/login">Login now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End login section  -->

</main>