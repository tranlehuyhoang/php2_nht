<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
    </section>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <div class="product__details--media">
                        <div class="product__media--preview  swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="public/uploads/<?php echo $productDetail['image']; ?>">
                                            <img class="product__media--preview__items--img" src="public/uploads/<?php echo $productDetail['image']; ?>" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="public/uploads/<?php echo $productDetail['image']; ?>" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product__details--info">
                        <form action="/addtocart" method="post" enctype="multipart/form-data">
                        
                            <input type="hidden" name="product_id" value="<?php echo $productDetail['id']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $productDetail['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $productDetail['price']; ?>">
                            <!-- <input type="hidden" name="product_quantity" value="1"> -->
                            <!-- <input type="hidden" name="product_quantity" value="<?php echo $productDetail['quantity']; ?>"> -->
                            <input type="hidden" name="product_quantity" id="product_quantity" value="<?php echo $productDetail['quantity']; ?>">

                            <h2 class="product__details--info__title mb-15"><?php echo $productDetail['name']; ?></h2>
                            <div class="product__details--info__price mb-10">
                                <span class="current__price">$<?php echo number_format($productDetail['price']); ?></span>
                            </div>
                            <p class="product__details--info__desc mb-15"><?php echo $productDetail['short_desc'] ?></p>
                            <div class="product__variant">
                                <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                    <div class="quantity__box">
                                        <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                        <label>
                                            <!-- <input type="number" class="quantity__number quickview__value--number" value="1" data-counter /> -->
                                            <input type="number" name="product_quantity" class="quantity__number quickview__value--number" value="1" data-counter />
                                        </label>
                                        <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo '<input class="quickview__cart--btn primary__btn" type="submit" name="addToCart" value="Add to cart">';
                            } else {
                                echo '<a href="/tai-khoan">Please login.</a>';
                            }
                            ?>
                            <!-- <button class="quickview__cart--btn primary__btn" type="submit" name="addToCart">Add to cart</button> -->
                        </form>
                        <hr>
                        <p>ID Product: <?php echo $productDetail['id'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                    </ul>
                    <div class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <p class="product__tab--content__desc"><?php echo $productDetail['long_desc'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->
</main>