@extends('layouts.loginlayout')
@section('content')
<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
    <a href="#" class="mb-15 text-center">
        <img src="assets/media/logos/logo-letter-1.png" class="max-h-75px" alt="" />
    </a>
    <!--begin::Signin-->
    <div class="login-form login-signin">
        <div class="text-center mb-10 mb-lg-20">
            <h2 class="font-weight-bold">Sign In</h2>
            <p class="text-muted font-weight-bold">Enter your Email Address and password</p>
        </div>
        <!--begin::Form-->
        <form class="form" method="POST"  action="{{ route('login') }}">
            @csrf

            <div class="form-group py-3 m-0">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75 @error('email') is-invalid @enderror" type="Email" placeholder="Email Address" name="email" value="{{ old('email') }}"  autocomplete="off" />
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group py-3 border-top m-0">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75 @error('password') is-invalid @enderror" type="Password" placeholder="Password" name="password" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline m-0 text-muted">
                    <input type="checkbox" name="remember" />
                    <span></span>Remember me</label>
                </div>
                <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forgot Password ?</a>
            </div>
            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
                <div class="my-3 mr-2">
                    <span class="text-muted mr-2">Don't have an account?</span>
                    <a href="javascript:;" id="kt_login_signup" class="font-weight-bold">Signup</a>
                </div>
                <button id="kt_login_signin_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signin-->
    <!--begin::Signup-->
    <div class="login-form login-signup">
        <div class="text-center mb-10 mb-lg-20">
            <h3 class="">Sign Up</h3>
            <p class="text-muted font-weight-bold">Enter your details to create your account</p>
        </div>
        <!--begin::Form-->
        <form class="form" method="POST" action="{{ route('register') }}" >
            <div class="form-group py-3 m-0">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75 @error('name') is-invalid @enderror" type="text" placeholder="Fullname" name="name" autocomplete="off" />
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group py-3 border-top m-0">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <div class="form-group py-3 border-top m-0">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Password" name="password" autocomplete="off" />
            </div>
            <div class="form-group py-3 border-top m-0">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
            </div>
            <div class="form-group mt-5">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline">
                    <input type="checkbox" name="agree" />
                    <span></span>I Agree the
                    <a href="#" class="ml-1">terms and conditions</a>.</label>
                </div>
            </div>
            <div class="form-group d-flex flex-wrap flex-center">
                <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                <button id="kt_login_signup_cancel" class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signup-->
    <!--begin::Forgot-->
    <div class="login-form login-forgot">
        <div class="text-center mb-10 mb-lg-20">
            <h3 class="">Forgotten Password ?</h3>
            <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
        </div>
        <!--begin::Form-->
        <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
            <div class="form-group py-3 border-bottom mb-10">
                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <div class="form-group d-flex flex-wrap flex-center">
                <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Forgot-->
</div>
@endsection