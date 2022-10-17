<div class="topbar">
    <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp;
            support@tutorfinder.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00
            33
            169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
    </div>
    <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile
            app</a>

    </div>
</div>

<header class="navbar mb-4">
    <div class="site-branding">
        <div class="inner">
            <a class="site-logo" href="/"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="Tutor Finder"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li><a href="/"><span>Home</span></a>

            </li>
            <li><a href="/search-tutors"><span>Search Tutor</span></a>

            </li>
            <li><a href="/request-tutor"><span>Request A Tutor</span></a>

            </li>

            <li><a href="/tutions"><span>Tutions</span></a>

            </li>
            <li><a href="/contact"><span>Contact Us</span></a>

            </li>
            @if (Auth::guest())
            <li><a href="/login"><span>Login</span></a>
            </li>
            <li><a href="/register"><span>Register</span></a>
            </li>
            @endif
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                @if (Auth::user())
                <div class="account"><a href="#"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li><a href="/my-profile">My Profile</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="/signout"> <i class="icon-lock"></i>Logout</a></li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</header>