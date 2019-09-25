
<nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
        -
        <div class="img" style="background-image: url({{asset('frontend/images/author-2.jpg')}});"></div>
        <div class="colorlib-table-cell js-fullheight">
            <div class="row no-gutters">
                <div class="col-md-12 text-center">
                        @auth
                            <h3 class="mb-4">
                                    Welcome {{Auth::user()->name}}
                            </h3>
                        @endauth
                        @guest
                            <h1>
                                Welcome
                            </h1>
                        @endguest
                    <ul>
                        <li class="{{\Request::is('/') ? 'active':''}}"><a href="{{route('home.index')}}"><span><small>01</small>Home</span></a></li>
                        <li class="{{\Request::is('resume') ? 'active':''}}" ><a href="{{route('home.resume')}}"><span><small>02</small>Resume</span></a></li>
{{--                        <li><a href="{{route('home')}}"><span><small>03</small>Services</span></a></li>--}}
                        <li class="{{\Request::is('portfolio') ? 'active':''}}" ><a href="{{route('home.portfolio')}}"><span><small>04</small>Portfolio</span></a></li>
                        <li class="{{\Request::is('blog') ? 'active':''}}" ><a href="{{route('home.blog')}}"><span><small>05</small>Blog</span></a></li>
                        <li class="{{\Request::is('contact') ? 'active':''}}" ><a href="{{route('home.contact')}}"><span><small>06</small>Contact</span></a></li>
                        @auth
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <span><small>07</small>{{ __('Logout') }}</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <li><a href="{{route('login')}}"><span><small>07</small>Login</span></a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
