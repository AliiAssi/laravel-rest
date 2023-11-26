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
                    <ul class="nav">
                        
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li>
                            <a class=''>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                           
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
                    <li class="scroll-to-section"><a href="#menu">Menu</a></li>

                    @if(Auth::check() && isset($count))
                    <li class="scroll-to-section"><a href="{{url('/cart')}}">cart[{{$count}}]</a></li>
                    @endif

                    <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="#">Features Page 4</a></li>
                            </ul>
                        </li>
                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        <li class="scroll-to-section">
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                <x-app-layout>
                                </x-app-layout>                                    
                                @else
                                    <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
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