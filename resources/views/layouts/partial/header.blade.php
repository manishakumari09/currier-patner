<!-- top menu -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg py-md-0 py-1 bg-white navbar-light-cs">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="{{asset('assets/icon/logo-new.png')}}" class="img-fluid" alt="Steadfastcourier">
        </a>
        <div>
            <a href="merchant-login" class="btn font-13 btn-log text-seagreen border-lightseagreen-1 mr-4 d-lg-none">Login</a>
            <button class="navbar-toggler without-focus border-0 px-0" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- for desktop only -->
            <ul class="navbar-nav ml-auto d-none d-lg-flex dropdown">

                <!-- <li class="nav-item mr-lg-4 py-lg-3 py-md-2 py-1 drop-menu position-relative active">
                    <a class="nav-link font-sm-14 text-dark"href="index.html#services" id="gotoservices">
                        Services
                        <span>
                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 12 7" xml:space="preserve" width="12" height="7">
                                <g transform="matrix(0,0.02777088,-0.02514801,0,11.999998,-3.125777)">
                                    <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                </g>
                            </svg>
                        </span>
                    </a>

                    <div class="drop-menu-elem rounded-bottom d-flex flex-wrap">
                        <div class="col-6 px-3 mb-2">
                            <a href="#">
                                <div class="d-flex align-items-center py-3">
                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 436.016 436.016" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="grad-1" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" style="stop-color:#006A4D;stop-opacity:1"></stop>
                                                    <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <path fill="#1db883" d="M309.565,157.136c2.469,5.195,8.668,9.2,14.42,9.314l5.134,0.102c-0.319,1.897-0.493,3.843-0.493,5.83   c0,19.356,15.747,35.104,35.103,35.104c19.356,0,35.104-15.748,35.104-35.104c0-19.356-15.748-35.103-35.104-35.103   c-6.711,0-12.987,1.896-18.325,5.177l-27.958-0.064c-3.579,0-6.595,1.523-8.272,4.178c-1.68,2.657-1.761,6.037-0.222,9.275   L309.565,157.136z"></path>
                                                <path fill="#1db883" d="M432.563,254.603l-21.718-30.259c-3.113-4.336-9.055-10.208-17.238-10.208h-59.755c-5.812,0-12.993,2.993-17.084,5.07   l-15.31,7.775c-1.14,0.579-2.665,1.029-4.338,1.318c0.026-0.361,0.055-0.722,0.055-1.09v-65.162c0-8.271-6.729-15-15-15h-56.869   c-8.271,0-15,6.729-15,15v65.162c0,8.271,6.729,15,15,15h25.587c1.889,1.846,4.1,3.329,6.494,4.214l26.75,9.894   c3.166,1.171,7.296,1.816,11.628,1.816c0.001,0,0.001,0,0.001,0c3.917,0,7.669-0.543,10.563-1.53l20.522-6.995v171.537   c0,7.72,6.28,14,14,14h2.744c7.72,0,14-6.28,14-14v-91.026h12.269v91.026c0,7.72,6.28,14,14,14h2.742c7.72,0,14-6.28,14-14V312.617   c6.203-1.081,12.727-5.189,16.091-10.406l16.416-25.455C437.188,270.439,436.945,260.708,432.563,254.603z M400.607,254.837   l5.619,8.064c1.94,2.786,1.921,7.846-0.042,10.616l-5.577,7.872V254.837z"></path>
                                                <path fill="url(#grad-1)" d="M176.297,0.873H11c-6.065,0-11,4.935-11,11v276.419c0,6.065,4.935,11,11,11h165.297c6.065,0,11-4.935,11-11V11.873   C187.297,5.807,182.362,0.873,176.297,0.873z M57.921,196.965H23.254v-16.756h34.667V196.965z M156.85,136.902H30.447V32.456   H156.85V136.902z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="font-15 font-md-14">Home Delivery</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 px-3 mb-2">
                            <a href="#">
                                <div class="d-flex align-items-center py-3">
                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 490 490" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="gr-grad1" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" style="stop-color:#006A4D;stop-opacity:1"></stop>
                                                    <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <g fill="url(#gr-grad1)">
                                                    <circle cx="45.303" cy="46.545" r="45.303"></circle>
                                                    <path d="M180.95,180.706c-3.127-10.258-13.46-15.58-24.234-12.913c-2.269,0.562-24.048,6.797-44.012-4.012    c-17.35-9.394-28.576-27.506-32.559-33.711c-8.06-12.556-19.313-22.588-34.841-22.588c-21.072,0-38.149,17.079-38.149,38.147    v119.885c0,13.415,6.922,25.21,17.39,32.012v170.472c0,11.468,9.294,20.761,20.759,20.761s20.76-9.293,20.76-20.761V297.525    c10.467-6.802,17.39-18.597,17.39-32.011v-74.35c3.374,2.426,6.959,4.707,10.761,6.766c15.541,8.413,31.75,10.765,45.01,10.765    c16.155,0,27.938-3.489,28.812-3.756C178.291,201.813,184.074,190.964,180.95,180.706z"></path>
                                                </g>
                                                <g fill="url(#gr-grad1)">
                                                    <circle cx="444.697" cy="46.545" r="45.303"></circle>
                                                    <path d="M309.05,180.706c3.127-10.258,13.972-16.04,24.235-12.913c0.121,0.034,24.048,6.797,44.012-4.012    c17.35-9.394,28.575-27.506,32.559-33.711c8.06-12.556,19.313-22.588,34.841-22.588c21.072,0,38.149,17.079,38.149,38.147v119.885    c0,13.415-6.923,25.21-17.39,32.012v170.472c0,11.468-9.294,20.761-20.76,20.761c-11.465,0-20.76-9.293-20.76-20.761V297.525    c-10.467-6.802-17.391-18.597-17.391-32.011v-74.35c-3.374,2.426-6.959,4.707-10.76,6.766    c-15.541,8.413-31.75,10.765-45.011,10.765c-16.155,0-27.937-3.489-28.811-3.756C311.708,201.814,305.927,190.964,309.05,180.706z    "></path>
                                                </g>
                                                <path fill="#006A4D" d="M249.749,113.173h-36.702c-0.604,0-1.093,0.489-1.093,1.093v20.428c0,1.584-1.289,2.873-2.874,2.873H191.02   c-1.584,0-2.873-1.289-2.873-2.873v-20.428c0-0.604-0.489-1.093-1.093-1.093h-36.703c-8.138,0-14.759,6.621-14.759,14.759v24.693   c0,0.51,0.352,0.951,0.849,1.065c1.915,0.438,4.248,0.652,7.134,0.652c5.222,0,11.063-0.711,15.754-1.279   c1.041-0.126,5.614-0.53,6.797-0.557c13.289-0.294,24.919,9.337,29.322,23.779c5.553,18.239-4.763,37.595-22.995,43.148   c-1.482,0.452-15.007,4.414-33.228,4.414c-0.713,0-1.891-0.022-2.52-0.035c-0.294-0.006-0.577,0.107-0.786,0.313   c-0.21,0.206-0.327,0.487-0.327,0.78v10.513c0,8.139,6.621,14.76,14.759,14.76h99.398c8.139,0,14.76-6.621,14.76-14.76V127.932   C264.509,119.794,257.888,113.173,249.749,113.173z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="font-15 font-md-14">Pick and Drop</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 px-3 mb-2">
                            <a href="#">
                                <div class="d-flex align-items-center py-3">
                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 459.419 459.419" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="gr-grad11" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" style="stop-color:#006A4D;stop-opacity:.8"></stop>
                                                    <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <polygon fill="url(#gr-grad11)" points="83.115,172.911 376.304,172.911 376.304,459.419 458.777,459.419 458.777,106.956     223.178,0 0.642,106.956 0.642,459.419 83.115,459.419   "></polygon>
                                                <rect fill="#1cbe87" x="171.155" y="403.543" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="235.005" y="403.543" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="107.313" y="403.543" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="171.155" y="341.985" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="107.313" y="341.985" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="235.005" y="341.985" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="171.155" y="280.436" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="107.313" y="280.436" width="52.023" height="44.878"></rect>
                                                <rect fill="#1cbe87" x="298.847" y="403.543" width="52.023" height="44.878"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="font-15 font-md-14">Warehousing</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 px-3 mb-2">
                            <a href="#">
                                <div class="d-flex align-items-center py-3">
                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 612 612" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="gr-grad21" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" style="stop-color:#006A4D;stop-opacity:.9"></stop>
                                                    <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <path fill="url(#gr-grad21)" d="M482.188,83.333L184.622,223.225v89.832l-51.91-23.082v-89.832L430.278,60.252l-99.946-44.439   c-13.383-5.95-35.281-5.95-48.664,0L35.557,125.243C15.95,133.961-0.05,158.649,0,180.107l0.606,256.534   c0.051,21.686,16.408,46.401,36.348,54.926L282.42,596.499c12.945,5.534,34.129,5.534,47.075,0.003l245.55-104.936   c19.939-8.521,36.297-33.234,36.348-54.919L612,180.107c0.051-21.458-15.949-46.146-35.557-54.864L482.188,83.333z    M556.398,288.675l-14.403,6.683l-0.292,101.353c-0.013,4.429-3.925,9.701-8.727,11.773l-21.563,9.309   c-4.727,2.041-8.551,0.149-8.554-4.223l-0.073-100.021l-13.951,6.472c-6.562,3.044-10.669-1.729-7.411-8.601l33.348-70.356   c3.366-7.102,11.806-11.199,15.184-7.347l34.221,39.012C567.593,276.623,563.257,285.494,556.398,288.675z M415.596,451.443   c0.037,4.243-3.55,9.24-8.001,11.162l-19.996,8.632c-4.385,1.893-7.972,0.029-8.022-4.16l-1.171-95.826l-12.938,6.002   c-6.085,2.823-9.968-1.808-7.006-8.344l30.31-66.881c3.057-6.747,10.873-10.541,14.062-6.805l32.301,37.836   c3.226,3.777-0.712,12.202-7.062,15.147l-13.338,6.188L415.596,451.443z M580.201,423.619c-0.015,2.226-2.016,4.865-4.468,5.896   l-228.395,95.95c-2.131,0.896-3.884-0.043-3.915-2.096l-0.175-11.162c-0.032-2.058,1.67-4.463,3.805-5.372l228.802-97.467   c2.455-1.046,4.438-0.086,4.423,2.146L580.201,423.619z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="font-15 font-md-14">Packaging</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li> -->
                <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-dark" href="" id="gotoservicearea">Home</a>
                </li>
                <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-dark" href="" id="gotoservicearea">About Us</a>
                </li>
                <!-- <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-dark" href="coverage-area.html" id="gotoservicearea">Service area</a>
                </li> -->
                <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-dark" href="" id="gotopricing">Pricing</a>
                </li>
                <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-dark" href="">Contact Us</a>
                </li>
                <li class="nav-item dropdown mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="district">District</a>
                        <a class="dropdown-item" href="zone">Zone</a>
                        <a class="dropdown-item" href="consignment-entry">Consigment Entry</a>
                        <a class="dropdown-item" href="consignment-allocation-to-delivery-boy">Consignment Allocation To
                            Delivery Boy</a>
                        <a class="dropdown-item" href="consignment-allocation-to-pp-manager">Consignment Allocation To
                            PP Manager</a>
                        <a class="dropdown-item" href="consignment-received-by-delivery-boy">Consignment Received By
                            Delivery Boy</a>
                        <a class="dropdown-item" href="consignment-receiver">Consignment Receiver</a>

                        <a class="dropdown-item" href="employee">Employee</a>
                        <a class="dropdown-item" href="pickup">Pickup</a>
                        <a class="dropdown-item" href="admin">Admin</a>
                    </div>
                </li>
                <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-dark outline rounded px-3 py-1"
                       href="merchant-register">Register</a>
                </li>
                <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
                    <a class="nav-link font-sm-14 text-white btn bg-color-lightseagreen py-1 px-4"
                       href="merchant-login">Login</a>
                </li>
            </ul>


            <!-- for tablet and mobile -->
            <ul class="navbar-nav d-block d-lg-none row">
                <li class="nav-item border-top active">
                    <a class="nav-link font-sm-14 text-dark px-3" href="merchant-register"
                       id="mbl-register">Register</a>
                </li>
                <li class="nav-item border-top active">
                    <a class="nav-link font-sm-14 text-dark px-3" href="index.html#mbl-services" id="mbl-gotoservices">Service</a>
                </li>
                <li class="nav-item border-top">
                    <a class="nav-link font-sm-14 text-dark px-3" href="coverage-area.html" id="mbl-gotoservicearea">Service
                        area</a>
                </li>
                <li class="nav-item border-top">
                    <a class="nav-link font-sm-14 text-dark px-3" href="index.html#mbl-pricing" id="mbl-gotopricing">Pricing</a>
                </li>
                <li class="nav-item border-top">
                    <a class="nav-link font-sm-14 text-dark px-3" href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of top menu -->
