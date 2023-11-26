<head>
    <style>
        .test{
            left: 0;
        }
    </style>
</head>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="__menu/assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="">

                        <!-- 
                        <li class="submenu">
                            <a href="javascript:;">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down Page 1</a></li>
                                <li><a href="#">Drop Down Page 2</a></li>
                                <li><a href="#">Drop Down Page 3</a></li>
                            </ul>
                        </li>
                    -->

                       
                    @auth
                    <li>
                     <a href="/redirects">home</a>
                    </li>
                    @if(isset($in))
                       <li>
                        <a href="/tracker">back to orders</a>
                       </li>
                    @endif
                    @endauth

                    
                    
                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                <x-app-layout>
                                </x-app-layout>
                                @else
                        <li><a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a></li>

                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        </li>
                        @endif
                        @endauth
            </div>
            @endif
            </li>

            </ul>

            <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->