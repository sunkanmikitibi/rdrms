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
                    <a href="{{}}" id="kt_login_signup" class="font-weight-bold">Signup</a>
                </div>
                <button id="kt_login_signin_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signin-->
 
</div>
@endsection