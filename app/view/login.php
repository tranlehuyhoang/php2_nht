<main class="main__content_wrapper">
    <section class="breadcrumb__section">
    </section>

    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="container">
            <form action="/loginUser" method="post">
                <div class="login__section--inner">
                    <div class="row row-cols-md-1 row-cols-1">
                        <div class="col">
                            <div class="account__login">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                    <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                    <?php
                                    if (isset($_GET['loginFailed']) && $_GET['loginFailed'] == 1) {
                                        echo '<div class="alert alert-danger" role="alert">Thông tin đăng nhập không đúng. Vui lòng thử lại!</div>';
                                    }
                                    ?>
                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" placeholder="Email" type="email" name="email">
                                    <input class="account__login--input" placeholder="Password" type="password" name="password">
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <!-- <button class="account__login--forgot" type="submit">Forgot Your Password?</button> -->
                                    </div>
                                    <button class="account__login--btn primary__btn" type="submit">Login</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <p class="account__login--signup__text">Don,t Have an Account? <a href="/register">Sign up now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End login section  -->

</main>