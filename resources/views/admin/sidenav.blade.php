<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <h5 class="centered">   {{ Auth::user()->name }} </h5>
        <li class="mt">
          <a href="{{route('admin.dashboard')}}">
            <i class="fa fa-dashboard"></i>
            <span>Početna</span>
            </a>
        </li>
        <li class="mt">
          <a class="" href="{{route('admin.home')}}">
            <i class="fa fa-book"></i>
            <span>Kreiraj novu vijest</span>
            </a>
        </li>
  
        <li class="mt">
          <a class="" href="/notices/create">
            <i class="fa fa-book"></i>
            <span>Dodaj Izvestaj</span>
            </a>
        </li>
               
        <li class="mt">
          <a class="" href="/notices">
            <i class="fa fa-book"></i>
            <span> Lista izvestaja</span>
            </a>
        </li>
     
        <li class="mt">
          <a class="" href="/warrants/create">
            <i class="fa fa-book"></i>
            <span> Dodaj putni nalog</span>
            </a>
        </li>
        <li class="mt">
          <a class="" href="/warrants">
            <i class="fa fa-book"></i>
            <span> Lista putnih naloga</span>
            </a>
        </li>
    
    
      
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>