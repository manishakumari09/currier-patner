@extends('layouts.master')

@section('home')

@push('css')

@endpush

@section('content')
    <!-- desktop and tablet -->
<div class="d-md-block d-none">

<!-- login -->
<section class="row pt-5">
    <div class="container pt-5 pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
        <div class="col-12 pt-4 px-xl-5 px-4">
            <div class="row mx-xl-4 rl-panel">
                <div class="col-6 bg-rl">
                    <div class="pt-5 pl-lg-5 pl-4 mt-5">
                        <h4 class="text-white font-regular">Welcome to</h4>
                        <h4 class="text-white font-regular">Steadfast Courier</h4>
                        <div class="pt-5 mt-4">
                            <img src="icon/rl-img.png" alt="image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-md-0 pr-lg-3">
                    <div class="px-lg-5 px-md-0 pt-5 mt-3">
                        <div class="w-100 login-panel">
                            <div class="py-4 px-3">
                                <h3 class="text-left text-color-13 font-h-md-23 font-regular">Log in to acess</h3>
                            </div>
                            <form method="POST" action="https://steadfastcourier.com/login">
                                <input type="hidden" name="_token" value="sws6j2VZXkdjbQUzFGIqti7aCYZluIg2pHxfmNYb">                                    <div class="form-group px-2 mx-2 mb-4">
                                    <input type="email" name="email" class="form-control pl-3 arroba mb-1 h-auto bg-transparent" placeholder="Email" value="" required autofocus>


                                </div>

                                <div class="form-group px-2 mx-2 mb-3">
                                    <input type="password" name="password" class="form-control pl-3 padlock mb-1 h-auto bg-transparent" placeholder="Password" required>


                                </div>


                                <div class="form-group d-flex flex-wrap justify-content-between px-2 mx-2">

                                    <div>
                                                                                        <a href="password/reset.html" class="font-14">Forgot Password?</a>

                                    </div>
                                </div>
                                <div class="px-2 mx-2 pb-3 pt-2">
                                    <button type="submit" class="btn btn-block font-regular bg-color-lightseagreen text-white font-20 py-2">LOGIN</button>
                                </div>
                                <div class="px-3 mt-1">
                                    <div class="w-100 text-left font-14 text-dark pt-2">
                                        Don’t have an account? <a href="register" class="text-red">Register</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of login -->


</div>


<!-- mobile device -->
<div class="d-block d-md-none">

<!-- login -->
<section class="row" id="mbl-register">
    <div class="container pt-4 mt-5">
        <div class="col-12 pt-4 px-sm-3 px-0">
            <div class="w-100 login-panel pb-3 pt-2">
                <div class="py-3 px-2">
                    <h3 class="text-left text-color-13 font-20 font-regular">Log in to access</h3>
                </div>
                <form method="POST" action="https://steadfastcourier.com/login">
                        <input type="hidden" name="_token" value="sws6j2VZXkdjbQUzFGIqti7aCYZluIg2pHxfmNYb">                        <div class="form-group px-2 mb-4">

                        <input type="email" class="form-control font-14 pl-3 mbl-arroba mb-1 h-auto bg-transparent" placeholder="Email" name="email" value="">

                                                </div>
                    <div class="form-group px-2">
                        <input type="password"  name="password" class="form-control font-14 pl-3 mbl-padlock mb-3 h-auto bg-transparent" placeholder="Password">

                                                </div>

                    <div class="form-group d-flex flex-wrap justify-content-between px-2">

                        <div>
                        <a href="password/reset.html" class="font-14">Forget password?</a>
                        </div>
                    </div>
                    <div class="px-2 pb-3 pt-2">
                        <button type="submit" class="btn btn-block font-regular bg-color-lightseagreen text-white font-16 py-2">LOGIN</button>
                    </div>
                    <div class="px-2 pt-2 pb-3">
                        <div class="w-100 text-left font-14 text-dark">
                            Don’t have an account? <a href="register.html" class="text-red">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end of login -->

</div>

@endsection

@push('js')

@endpush

