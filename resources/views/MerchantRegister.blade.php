@extends('layouts.master')

@section('home')

    @push('css')

    @endpush

@section('content')
    <!-- desktop and tablet -->
    <div class="d-md-block d-none">

        <!-- registration -->
        <section class="row pt-5">
            <div class="container pt-5 pb-3 mt-xl-5 mt-3">
                <div class="col-12 pt-4">
                    <div class="row mx-xl-4 rl-panel">
                        <div class="col-6 bg-rl">
                            <div class="pt-5 pl-lg-5 pl-4 mt-5">
                                <h4 class="text-white font-regular">Welcome to</h4>
                                <h4 class="text-white font-regular">Stk It Solution Ltd</h4>
                                <div class="pt-5 mt-4">
                                    <img src="{{asset('assets/icon/delivery-man-img-reg.png')}}" alt="image"
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pr-md-0 pr-lg-3">
                            <div class="px-md-0 py-5 my-3">
                                <div class="w-100 register-panel">
                                    <div class="pb-4 px-3">
                                        @if(session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <h3 class="text-left text-color-13 font-h-md-23 font-regular">Become a
                                            Merchant</h3>
                                    </div>
                                    <form method="post" action="{{route('merchantregister.store')}}">

                                        @csrf
                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control px-3 h-auto bg-transparent"
                                                       name="b_name" placeholder="Name of Business" required>
                                            </div>


                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col pr-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="f_name"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="First Name" required>
                                                </div>
                                            </div>

                                            <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="M_name"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Middle Name" required>
                                                </div>
                                            </div>
                                            <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="l_name"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <textarea class="form-control px-3 h-auto bg-transparent" rows="2"
                                                          name="address" placeholder="Address of your Pick up Location"
                                                          required></textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-md-6 pr-2 mb-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="zone">
                                                        <option> Select Zone</option>
                                                        @foreach ($zones as $zone)
                                                            <option
                                                                value="{{ $zone->id }}">{{ $zone->zoneName }}</option>">
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="pincode"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Pincode" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <input type="text" name="phone"
                                                       class="form-control px-3 h-auto bg-transparent"
                                                       placeholder="Phone Number" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <input type="email" name="email"
                                                       class="form-control px-3 h-auto bg-transparent"
                                                       placeholder="Email" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap">

                                            <div class="d-flex flex-wrap mb-4">
                                                <div class="col pr-2 mb-1">
                                                    <div class="form-group mb-0">
                                                        <input type="password"
                                                               class="form-control px-3 h-auto bg-transparent"
                                                               placeholder="Password Min:6 Chars" name="password"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col pl-2 mb-1">
                                                    <div class="form-group mb-0">
                                                        <input type="password"
                                                               class="form-control px-3 h-auto bg-transparent"
                                                               placeholder="Confirm Password"
                                                               name="password_confirmation" required>
                                                    </div>
                                                </div>
                                                <div class="w-100 px-3">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-2 mx-2 pb-3 pt-2">
                                            <button type="submit"
                                                    class="btn btn-block font-regular bg-color-lightseagreen text-white font-20 font-h-md-18 py-2"
                                                    name="submit">REGISTER NOW
                                            </button>
                                        </div>
                                        <!-- <div class="px-3 py-2">
                                            <div class="w-100 text-left font-14 text-dark">
                                                Already have an account? <a href="login" class="text-red">Login</a>
                                            </div>
                                        </div> -->
                                        <div class="px-3 py-2">
                                            <div class="w-100 text-left font-14 text-dark">
                                                Already have an account? <a href="login.html" class="text-red">Login</a>
                                            </div>
                                        </div>
                                        <div class="pb-4 px-3">
                                            <h6 class="text-left  font-h-md-23 font-medium" style="color:red"></h6>
                                        </div>
                                        <!--<div class="pb-4 px-3">
                                            <h6 class="text-left  font-h-md-23 font-medium" style="color:red"></h6>
                                        </div>-->
                                        <div class="pb-4 px-3">
                                            <h6 class="text-left  font-h-md-23 font-medium">Developed by <a
                                                    href="https://stkitbd.com/" target="_blank" style="color:red">Stk It
                                                    Solution Ltd.</a></h6>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of registration -->


    </div>





    <!-- mobile device -->
    <div class="d-block d-md-none">

        <!-- registration -->
        <!-- <section class="row" id="mbl-register">
            <div class="container pt-5 mt-5">
                <div class="col-12 p-0">
                    <div class="w-100 mbl-register-panel">
                        <div class="pb-3 pt-2">
                            <h3 class="text-left text-color-13 font-20 font-regular">Become a Merchant</h3>
                        </div>

                        <form action="https://steadfastcourier.com/register" role="form" method="POST">
                            <input type="hidden" name="_token" value="sws6j2VZXkdjbQUzFGIqti7aCYZluIg2pHxfmNYb">                        <div class="mb-4">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control font-14 px-3 h-auto bg-transparent" placeholder="Name of Business" name="b_name"  >
                                </div>
                                                        </div>

                            <div class="d-flex flex-wrap">
                                <div class="col pr-2 pl-0 mb-4">
                                      <div class="form-group mb-0">
                                        <input type="text"  name="f_name"  class="form-control font-14 px-3 h-auto bg-transparent" placeholder="First Name" >
                                    </div>
                                                                </div>
                                <div class="col pl-2 pr-0 mb-4">
                                    <div class="form-group mb-0">
                                        <input type="text" name="l_name"  class="form-control font-14 px-3 h-auto bg-transparent" placeholder="Last Name" >
                                    </div>
                                                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group mb-0">
                                    <textarea class="form-control px-3 h-auto bg-transparent" rows="2" name="address" placeholder="Address of your Pick up Location" ></textarea>
                                </div>
                                                        </div>


                                                        <div class="d-flex flex-wrap">
                                            <div class="col pr-2 mb-4">
                                                  <div class="form-group mb-0">
                                                    <input type="text" name="zone"   class="form-control px-3 h-auto bg-transparent" placeholder="Zone" >
                                                </div>
                                                                                        </div>


                                            <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="pincode"  class="form-control px-3 h-auto bg-transparent" placeholder="Pincode" >
                                                </div>
                                                                                        </div>
                                        </div>


                            <div class="mb-4">
                                <div class="form-group mb-0">
                                    <input type="text" name="phone"  class="form-control font-14 px-3 h-auto bg-transparent" placeholder="Phone Number" >
                                </div>
                                                        </div>
                            <div class="mb-4">
                                <div class="form-group mb-0">
                                    <input type="email"name="email"  class="form-control font-14 px-3 h-auto bg-transparent" placeholder="Email" >
                                </div>
                                                        </div>
                            <div class="d-flex flex-wrap mb-4">
                                <div class="col pr-2 pl-0 mb-1">
                                      <div class="form-group mb-0">
                                        <input type="password"  class="form-control font-14 px-3 h-auto bg-transparent" placeholder="Password" name="password" >
                                    </div>

                                </div>
                                <div class="col pl-2 pr-0 mb-1">
                                    <div class="form-group mb-0">
                                        <input type="password" class="form-control font-14 px-3 h-auto bg-transparent" placeholder="Confirm Password" name="password_confirmation" >
                                    </div>
                                </div>
                                <div class="w-100">
                                                                </div>
                            </div>
                            <div class="pb-3 pt-2">
                                <button type="submit" class="btn btn-block font-regular bg-color-lightseagreen text-white font-16 py-2">REGISTER NOW</button>
                            </div>
                            <div class="py-2">
                                <div class="w-100 text-left font-14 text-dark">
                                    Already have an account? <a href="login" class="text-red">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end of registration -->


    </div>

@endsection

@push('js')

@endpush
