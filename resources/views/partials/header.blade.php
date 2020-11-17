<div class="responsive-header five">
    <div class="responsive-menubar">
        <div class="res-logo"><a href="index.html" title=""><img src="{{ asset('logo.png') }}" alt="logo" /></a></div>
        <div class="menu-resaction">
            <div class="res-openmenu">
                <img src="{{ asset('assets/images/icon.png') }}" alt="menu" /> Menu
            </div>
            <div class="res-closemenu">
                <img src="{{ asset('assets/images/icon2.png') }}" alt="close" /> Close
            </div>
        </div>
    </div>
    <div class="responsive-opensec">
        <div class="btn-extars">
            <ul class="account-btns">
                @auth
                    <li><a href="
                        @can('isAdmin')
                        {{ url('/admin') }}
                        @else()
                        {{ url('/home') }}
                        @endcan
                        "><i class="la la-home"></i> My Account</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="la la-power-off"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @else
                        <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>

                        @if (Route::has('register'))
                        <li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
                        @endif
                    @endauth
            </ul>
        </div><!-- Btn Extras -->
        <form class="res-search">
            <input type="text" placeholder="Job title, keywords or company name" />
            <button type="submit"><i class="la la-search"></i></button>
        </form>
        <div class="responsivemenu">
            <ul>
                <li class="menu-item">
                    <a href="{{ url('/') }}" title="">Home</a>
                </li>
                    <a href="#" title="">About us</a>
                </li>
                <li class="menu-item">
                    <a href="#" title="">Contact us</a>
                </li>
                <li class="menu-item">
                    <a href="#" title="">Documents</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="style5">
    <div class="menu-sec">
        <div class="container fluid">
            <nav>
                <ul>
                    <li class="menu-item">
                        <a href="{{ url('/') }}" title="">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">About us</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">Contact us</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">Documents</a>
                    </li>
                </ul>
            </nav><!-- Menus -->
            <div class="logo">
                <a href="index.html" title=""><img src="{{ asset('logo.png') }}" alt="" /></a>
            </div><!-- Logo -->
            <div class="btn-extars">
                <ul class="account-btns">
                    @auth
                    <li><a href="
                        @can('isAdmin')
                        {{ url('/admin') }}
                        @else()
                        {{ url('/home') }}
                        @endcan
                        "><i class="la la-home"></i> My Account</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="la la-power-off"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @else
                        <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>

                        @if (Route::has('register'))
                        <li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
                        @endif
                    @endauth
                </ul>
            </div><!-- Btn Extras -->
        </div>
    </div>
</header>
