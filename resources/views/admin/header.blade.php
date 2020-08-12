<header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="/admin/dashboard" class="logo"><b>VK<span>DANILOVGRAD</span></b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
  
    </div>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <li>        <a class="dropdown-item logout" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Odjava') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form></li>
      </ul>
    </div>
  </header>