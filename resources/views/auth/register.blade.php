@extends('layouts.app')

@section('content')
    <div class="inner-wrapper">
        <div class="container-fluid no-padding">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="main-banner">
                        <img src="images/banner-1.jpg" class="img-fluid full-width main-img" alt="banner">
                        <div class="overlay-2 main-padding">
                            <img src="images/logo-2.jpg" class="img-fluid" alt="logo">
                        </div>
                        <img src="images/burger.png" class="footer-img" alt="footer-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-2 user-page main-padding">
                        <div class="login-sec">
                            <div class="login-box">
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <h4 class="text-light-black fw-600">Create your account</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Name</label>
                                                <input type="text" name="name" class="form-control form-control-submit"
                                                    placeholder="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Email</label>
                                                <input type="email" name="email" class="form-control form-control-submit"
                                                    placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Password (8 character minimum)</label>
                                                <input type="password" id="password-field" name="password"
                                                    class="form-control form-control-submit"
                                                    placeholder="Password" required>
                                                <div data-name="#password-field"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Confirm Password (8 character minimum)</label>
                                                <input type="password" id="password-field" name="password_confirmation"
                                                    class="form-control form-control-submit" value=""
                                                    placeholder="Confirm password" required>
                                                <div data-name="#password-field"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Address</label>
                                                <input type="text" name="address" class="form-control form-control-submit"
                                                    placeholder="Address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Phone</label>
                                                <input type="number" name="phone" class="form-control form-control-submit"
                                                    placeholder="Phone" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Role</label>
                                                <select class="form-control form-control-submit form-select" name="role" aria-label="Default select example">
                                                    <option selected value="1">User</option>
                                                    <option value="2">Shipper</option>
                                                    <option value="3">Restaurant</option>
                                                </select>
                                            </div>
                                            <div class="form-group checkbox-reset">
                                                <label class="custom-checkbox mb-0">
                                                    <input type="checkbox" name="#"> <span class="checkmark"></span> Keep me
                                                    signed in</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-second btn-submit full-width">Create your
                                                    account</button>
                                            </div>
                                            <div class="form-group text-center"> <span>or</span>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-second btn-facebook full-width">
                                                    <img src="fonts/facebook-logo.svg" alt="btn logo">Continue with
                                                    Facebook</button>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-second btn-google full-width">
                                                    <img src="images/google-logo.png" alt="btn logo">Continue with
                                                    Google</button>
                                            </div>
                                            <div class="form-group text-center">
                                                <p class="text-light-black mb-0">Have an account? <a href="login.html">Sign
                                                        in</a>
                                                </p>
                                            </div> <span class="text-light-black fs-12 terms">By creating your Quickmunch
                                                account, you agree to the <a href="#"> Terms of Use </a> and <a href="#">
                                                    Privacy Policy.</a></span>
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
@endsection
