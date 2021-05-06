@extends('layouts.app')

@section('content')
    <section class="ex-collection section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore our collections</h3>
                    </div>
                </div>
            </div>
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
                        @foreach ($food as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product-box mb-xl-20">
                                    <div class="product-img">
                                        <a href="">
                                            <img src="{{ $item->image->url }}" class="img-fluid full-width"
                                                alt="product-img" />
                                        </a>
                                        <div class="overlay">
                                            <div class="product-tags padding-10">
                                                <span class="circle-tag bg-gradient-primary">
                                                    <i class="fas fa-shopping-cart"></i> 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="title-box">
                                            <h6 class="product-title"><a href="restaurant.html"
                                                    class="text-light-black">{{ $item->name }}</a></h6>
                                            <div class="tags"><span class="text-custom-white rectangle-tag bg-red">
                                                    {{ $item->price }}VNĐ
                                                </span></div>
                                        </div>
                                        <p class="text-light-white">{{ $item->restaurant->address }}</p>
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
                        @endforeach
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
                        @foreach ($food as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product-box mb-xl-20">
                                    <div class="product-img">
                                        <a href="">
                                            <img src="{{ $item->image->url }}" class="img-fluid full-width"
                                                alt="product-img" />
                                        </a>
                                        <div class="overlay">
                                            <div class="product-tags padding-10">
                                                <span class="circle-tag bg-gradient-primary">
                                                    <i class="fas fa-shopping-cart"></i> 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="title-box">
                                            <h6 class="product-title"><a href="restaurant.html"
                                                    class="text-light-black">{{ $item->name }}</a></h6>
                                            <div class="tags"><span class="text-custom-white rectangle-tag bg-red">
                                                    {{ $item->price }}VNĐ
                                                </span></div>
                                        </div>
                                        <p class="text-light-white">{{ $item->restaurant->address }}</p>
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
                        @endforeach
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
