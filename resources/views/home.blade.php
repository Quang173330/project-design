@extends('layouts.app')

@section('content')
    <section class="browse-cat u-line section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">
                            Browse by cuisine <span class="fs-14"><a href="restaurant.html">See all restaurant</a></span>
                        </h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-slider swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px)">
                            <div class="swiper-slide swiper-slide-active" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon icon-parent text-custom-white bg-light-green"><i
                                            class="fas fa-map-marker-alt"></i></div>
                                    <span class="text-light-black cat-name">Brooklyn</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-1.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Italian </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-2.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Thai </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-3.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Chinese </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-4.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Mexican </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-5.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Indian </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-6.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Lebanese </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-7.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">Japanese </span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="width: 142.5px; margin-right: 40px">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green">
                                        <img src="images/cuisine-8.jpg" class="rounded-circle" alt="categories" />
                                    </div>
                                    <span class="text-light-black cat-name">American </span>
                                </a>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-disabled="false"></div>
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button"
                            aria-label="Previous slide" aria-disabled="true"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse by category -->
    <!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore our collections</h3>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="ex-collection-box mb-xl-20">
                        <img src="images/collection-1.jpg" class="img-fluid full-width" alt="image" />
                        <div class="category-type overlay padding-15"><a href="restaurant.html" class="category-btn">Top rated</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-collection-box mb-xl-20">
                        <img src="images/collection-2.jpg" class="img-fluid full-width" alt="image" />
                        <div class="category-type overlay padding-15"><a href="restaurant.html" class="category-btn">Top rated</a></div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="large-product-box mb-xl-20 p-relative">
                        <img src="images/Banner-12.jpg" class="img-fluid full-width" alt="image" />
                        <div class="category-type overlay padding-15">
                            <button class="category-btn">Most popular near you</button> <a href="restaurant.html"
                                class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="images/shop-23.jpg" class="img-fluid full-width" alt="product-img" />
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10">
                                            <span class="circle-tag">
                                                <img src="fonts/013-heart-1.svg" alt="tag" />
                                            </span>
                                            <div class="custom-tag"><span
                                                    class="text-custom-white rectangle-tag bg-gradient-red"> 10% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black"> Great
                                                Burger</a></h6>
                                        <div class="tags"><span class="text-custom-white rectangle-tag bg-yellow"> 3.1
                                            </span></div>
                                    </div>
                                    <p class="text-light-white">American, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time">
                                            <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/004-leaf.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/006-chili.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/005-chef.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/008-protein.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/009-lemon.svg" alt="tag" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-12">
                    <div class="banner-adv2 mb-xl-20">
                        <img src="images/vbanner-2.jpg" class="img-fluid full-width" alt="banner" />
                        <span class="text">Unlimited Free Delivery with. <img src="images/tag.jpg" alt="logo" /> <a
                                href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                        <span class="close-banner"></span>
                    </div>
                </div>
            </div>
            <!-- advertisement banner -->
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="images/shop-7.jpg" class="img-fluid full-width" alt="product-img" />
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10">
                                            <span class="circle-tag">
                                                <img src="fonts/013-heart-1.svg" alt="tag" />
                                            </span>
                                            <div class="custom-tag"><span
                                                    class="text-custom-white rectangle-tag bg-gradient-red"> 10% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black"> Great
                                                Burger</a></h6>
                                        <div class="tags"><span class="text-custom-white rectangle-tag bg-yellow"> 3.1
                                            </span></div>
                                    </div>
                                    <p class="text-light-white">American, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time">
                                            <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/004-leaf.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/006-chili.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/005-chef.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/008-protein.svg" alt="tag" />
                                        </span>
                                        <span class="text-custom-white square-tag">
                                            <img src="fonts/009-lemon.svg" alt="tag" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="large-product-box mb-xl-20 p-relative">
                        <img src="images/Banner-1.jpg" class="img-fluid full-width" alt="image" />
                        <div class="category-type overlay padding-15">
                            <button class="category-btn">Most popular near you</button> <a href="restaurant.html"
                                class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="ex-collection-box mb-sm-20">
                        <img src="images/collection-3.jpg" class="img-fluid full-width" alt="image" />
                        <div class="category-type overlay padding-15"><a href="restaurant.html" class="category-btn">Top
                                rated</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-collection-box">
                        <img src="images/collection-4.jpg" class="img-fluid full-width" alt="image" />
                        <div class="category-type overlay padding-15"><a href="restaurant.html" class="category-btn">Top
                                rated</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
