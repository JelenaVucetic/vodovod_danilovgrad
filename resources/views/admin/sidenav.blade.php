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
            <span>Kreiraj novo obavestenje</span>
            </a>
        </li>
  
        <li class="mt">
          <a class="" href="/notices/create">
            <i class="fa fa-book"></i>
            <span>Dodaj dokument</span>
            </a>
        </li>
               
        <li class="mt">
          <a class="" href="/notices">
            <i class="fa fa-book"></i>
            <span> Lista dokumenata</span>
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
        <li class="mt">
          <a class="" href="/aktuelnos">
            <i class="fa fa-book"></i>
            <span> Lista aktuelnih projekata</span>
            </a>
        </li>
        <li class="mt">
          <a class="" href="/aktuelnos/create">
            <i class="fa fa-book"></i>
            <span>Dodaj aktuelni projekat</span>
            </a>
        </li>
    
    
      
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>