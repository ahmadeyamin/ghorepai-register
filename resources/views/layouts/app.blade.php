<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>GhorePai.com - ঘড়েপাই.কম</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('css')
</head>

<body>

    @if(session()->has('success'))
    <div style="background: rgb(0, 197, 0);color:#fff;padding: 20px 30px;font-size:1.5rem;text-align: center">
        {{ ucfirst(session('success')) }}
    </div>
    @endif

    <header id="header" class="header">
        <div class="container">
            <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
                <div class="logo_wrapper"><a href="/" aria-current="page" class="logo_link w-nav-brand w--current"><img
                            src="{{ asset('img/logo.png') }}" alt="" class="nav_logo" /></a></div>
                <nav role="navigation" class="top_nav w-nav-menu">
                    <a href="/" class="nav_item w-nav-link">Home</a>
                    <a href="#footer" class="nav_item w-nav-link">Shops</a>
                    <a href="#footer" class="nav_item w-nav-link">Our Mission</a>
                    <a href="#footer" class="nav_item w-nav-link">About Us</a>
                    <a href="{{ route('register-heros') }}" class="nav_item signin w-inline-block">
                        <div class="nav_i--text">Pre Register </div>
                        <img src="{{ asset('img/left-arow.svg') }}" alt="" class="arow_icon" />
                    </a>
                </nav>
                <div class="menu-button w-nav-button"></div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer id="footer" class="footer">
        <div class="w-container">
            <div class="footer-flex-container">
                <a href="#" class="footer_image w-inline-block"><img src="{{ asset('img/logo.png') }}"
                        alt="" class="img" /></a>
                <div class="div-block">
                    <h2 class="footer-heading">Contact Us</h2>
                    <ul role="list" class="w-list-unstyled">
                        <li><a href="//facebook.com/ghorepai" class="footer_shop_name">Facebook</a></li>
                        <li><a href="mailto:ghorepai@gmail.com?subject=Email%20Subject" class="footer_shop_name">Mail</a>
                        </li>
                        <li><a href="tel:01999050360" class="footer_shop_name">Phone</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-heading">Our Mission</h2>
                    <ul role="list" class="w-list-unstyled">
                        <li>
                            <p>We are working on a path to make a system <br />that will help any person to get
                                restaurants.<br />product from there home.<br />‍<br />by using our app or website.</p>
                        </li>
                    </ul>
                </div>
                <div class="div-block-2">
                    <h2 class="footer-heading">Connected Shop</h2>
                    <ul role="list" class="w-list-unstyled">
                        <li class="list-item"><img src="{{ asset('img/color.jpeg') }}" alt="Color Lounge" class="footer_shop_logo" />
                                <a href="#" class="footer_shop_name">Color Lounge</a>
                            </li>
                    </ul>
                </div>
            </div>
            <div>Copyright © 2020 GhorePai.com. All rights reserved.</div>
        </div>
    </footer>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5f107a0a404c0ad5e20c4ee3" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    @stack('js')
</body>

</html>
