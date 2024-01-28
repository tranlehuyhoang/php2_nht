<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- Start shop section -->
    <section class="shop__section section--padding">
        <div class="container">
            <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
                <div class="product__view--mode d-flex align-items-center">

                    <div class="product__view--mode__list">
                        <div class="product__grid--column__buttons d-flex justify-content-center">
                            <button class="product__grid--column__buttons--icons active" aria-label="product grid button" data-toggle="tab" data-target="#product_grid">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                    <g transform="translate(-1360 -479)">
                                        <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor" />
                                        <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor" />
                                        <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor" />
                                        <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__grid--column__buttons--icons" aria-label="product list button" data-toggle="tab" data-target="#product_list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                    <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                        <g transform="translate(12 -2)">
                                            <g id="Group_1326" data-name="Group 1326">
                                                <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor" />
                                                <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor" />
                                            </g>
                                            <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                                <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor" />
                                                <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor" />
                                            </g>
                                            <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                                <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor" />
                                                <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <p class="product__showing--count">- results</p>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="shop__product--wrapper">
                        <div class="tab_content">
                            <div id="product_grid" class="tab_pane active show">
                                <div class="product__section--inner product__grid--inner">
                                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                        <?php foreach ($products as $product) : ?>
                                            <form action="/cart/addToCart" method="post">

                                                <input type="hidden" name="product_id" value="<?php echo $productDetail['id']; ?>">
                                                <input type="hidden" name="product_name" value="<?php echo $productDetail['name']; ?>">
                                                <input type="hidden" name="product_price" value="<?php echo $productDetail['price']; ?>">
                                                <input type="hidden" name="product_quantity" value="1">

                                                <div class="col mb-30">
                                                    <div class="product__items ">
                                                        <div class="product__items--thumbnail">
                                                            <a class="product__items--link" href="/san-pham?id=<?php echo $product['id']; ?>">
                                                                <img class="product__items--img product__primary--img" src="public/uploads/<?php echo $product['image']; ?>" alt="product-img">
                                                            </a>
                                                        </div>
                                                        <div class="product__items--content">
                                                            <h3 class="product__items--content__title h4"><a href="/san-pham?id=<?php echo $product['id']; ?>"><?php echo $product["name"] ?></a>
                                                            </h3>
                                                            <div class="product__items--price">
                                                                <span class="current__price">$<?php echo number_format($product["price"]) ?></span>
                                                                <!-- <span class="price__divided"></span>
                                                        <span class="old__price">$78</span> -->
                                                            </div>
                                                            <!-- <ul class="product__items--action d-flex">
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn add__to--cart" href="#">
                                                                        <span class="add__to--cart__text">Add to cart</span>
                                                                        <input class="add__to--cart__text" type="submit" value="Add to cart" name="addToCart">
                                                                    </a>
                                                                </li>

                                                            </ul> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

                            <div id="product_list" class="tab_pane">
                                <div class="product__section--inner">
                                    <div class="row row-cols-1 mb--n30">
                                        <?php foreach ($products as $product) : ?>
                                            <div class="col mb-30">
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="/san-pham?id=<?php echo $product['id']; ?>">
                                                            <img class="product__items--img product__primary--img" src="public/uploads/<?php echo $product['image']; ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="/san-pham?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                                                        </h3>
                                                        <div class="product__list--items__price mb-10">
                                                            <span class="current__price">$<?php echo number_format($product['price']); ?></span>
                                                            <!-- <span class="price__divided"></span>
                                                        <span class="old__price">$78</span> -->
                                                        </div>
                                                        <p class="product__list--items__content--desc mb-15">
                                                            <?php echo $product['short_desc']; ?></p>
                                                        <ul class="product__items--action d-flex">
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn add__to--cart" href="cart.html">
                                                                    <span class="add__to--cart__text">Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li class="product__items--action__list">
                                                                <a class="product__items--action__btn" data-open="modal1" href="/san-pham?id=<?php echo $product['id']; ?>">
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
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End shop section -->
</main>