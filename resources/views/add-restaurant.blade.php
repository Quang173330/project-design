@extends('layouts.app')

@section('content')
    <section class="register-restaurent-sec section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-7">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
                                                <form action="{{ route('restaurants.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="text-light-black fw-700">Add Restaurant</h5>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Restaurant Name <sup
                                                                        class="fs-16">*</sup>
                                                                </label>
                                                                <input type="text" name="name"
                                                                    class="form-control form-control-submit"
                                                                    placeholder="i.e Pizza Hut">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Restaurant
                                                                    Address</label>
                                                                <input type="text" name="address"
                                                                    class="form-control form-control-submit"
                                                                    placeholder="i.e +1 321 828 6662">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Restaurant
                                                                    Avatar</label>
                                                                <input type="file" name="avatar" id="avatar"
                                                                    class="form-control form-control-submit"
                                                                    placeholder="i.e +1 321 828 6662">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Restaurant
                                                                    Introduce</label>
                                                                <textarea class="ckeditor" name="introduce"
                                                                    required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="form-group"></div>
                                                                <button type="submit" class="btn-second btn-submit">Add
                                                                    Restaurant</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div
                        class="advertisement-slider swiper-container h-auto swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="width: 770px; height : 872px;">
                                <div class="large-product-box p-relative pb-0">
                                    <img src="{{ asset('images/sidebanner-1.jpg') }}" class="img-fluid full-width"
                                        alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
