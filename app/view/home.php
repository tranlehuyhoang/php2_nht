<main class="main__content_wrapper">
    <!-- Start product section -->
    <section class="product__section section--padding pt-0">
        <div class="container-fluid">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">New Product</h2>
            </div>
            <div class="product__section--inner product__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($products as $product) : ?>
                        <div class="swiper-slide">
                            <div class="product__items ">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="/san-pham?id=<?php echo $product['id']; ?>">
                                        <img class="product__items--img product__primary--img" src="public/uploads/<?php echo $product['image']; ?>" alt="product-img">
                                    </a>
                                </div>
                                <div class="product__items--content">
                                    <h4 class="product__items--content__title"><a href="/san-pham?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$<?php echo number_format($product['price']); ?></span>
                                        <!-- <span class="price__divided"></span> -->
                                        <!-- <span class="old__price">$68</span> -->
                                    </div>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="#">
                                                <span class="add__to--cart__text">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="/san-pham?id=<?php echo $product['id']; ?>">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512">
                                                    <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="product__section section--padding pt-0">
        <div class="container-fluid">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">New Product</h2>
            </div>
            <div class="product__section--inner product__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($products as $product) : ?>
                        <div class="swiper-slide">
                            <div class="product__items ">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="/san-pham?id=<?php echo $product['id']; ?>">
                                        <img class="product__items--img product__primary--img" src="public/uploads/<?php echo $product['image']; ?>" alt="product-img">
                                    </a>
                                </div>
                                <div class="product__items--content">
                                    <h4 class="product__items--content__title"><a href="/san-pham?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$<?php echo number_format($product['price']); ?></span>
                                        <!-- <span class="price__divided"></span> -->
                                        <!-- <span class="old__price">$68</span> -->
                                    </div>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="#">
                                                <span class="add__to--cart__text">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="/san-pham?id=<?php echo $product['id']; ?>">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512">
                                                    <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    

</main>