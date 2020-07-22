<header class="header">
    <div class="header-content">
        <div class="header-left">
            <div>
                <img src="/images/VIK-DG-Logo-Color.png" alt="">
            </div>
            <div>
                <a href="">Naslovna</a>
            </div>
            <div>
                <a href="">O nama</a>
            </div>
            <div>
                <a href="">Kontakt informacije</a>
            </div>
        </div>
        <div class="header-right">
            <div>
               <img src="/images/iconfinder_phone_216352.svg" alt="">
               <p>020 / 811 - 550</p>
            </div>
            <div>
                <img src="/images/Page-1.svg" alt="">
                <p>vik@danilovgrad.me</p>
            </div>
            <div>
                <img src="/images/search_1_.svg" alt="">
            </div>
        </div>
    </div>
   
</header>


{{-- <header class="s-header">

    <div class="row">

        <div class="s-header__content column">
            <h1 class="s-header__logotext">
                <a href="index.html" title="">Keep It Simple.</a>
            </h1>
            <p class="s-header__tagline">Put your awesome tagline here.</p>
        </div>

    </div> <!-- end row -->

   <nav class="s-header__nav-wrap">

       <div class="row">

            <ul class="s-header__nav">
                <li class="current"><a href="index.html">Home</a></li>
                <li class="has-children"><a href="#0">Dropdown</a>
                    <ul>
                        <li><a href="#0">Submenu 01</a></li>
                        <li><a href="#0">Submenu 02</a></li>
                        <li><a href="#0">Submenu 03</a></li>
                    </ul>
                </li>
                <li><a href="demo.html">Demo</a></li>	
                <li><a href="archives.html">Archives</a></li>
                <li class="has-children"><a href="#0">Blog</a>
                    <ul>
                        <li><a href="blog.html">Blog Entries</a></li>
                        <li><a href="single.html">Single Blog</a></li>
                    </ul>
                </li>
                <li><a href="page.html">Page</a></li>
            </ul> <!-- end #nav -->
  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
       </div> 

    </nav> <!-- end #nav-wrap -->

    <a class="header-menu-toggle" href="#0" title="Menu"><span>Menu</span></a>

</header> --}}