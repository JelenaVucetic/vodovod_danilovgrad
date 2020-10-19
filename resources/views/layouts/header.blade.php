<header class="header sticky-top">
    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
    <div>
        <a href="/"><img class="hedimg" src="/images/Component3–1.png" alt="" id="logo"></a>


        <nav>
            <ul class="nav-list">
                <div class="header-content">

                    <div class="header-left">

                        <div class="hldiv">
                            <h6><a href="/">Naslovna</a></h6>
                        </div>
                        <div class=" hldiv dropdown">
                            <h6> <a href="#">O Nama</a></h6>
                            <div class="dropdown-content">
                                <h6> <a href="/about">Istorijat</a></h6>
                                <h6> <a href="/basic"> Osnovni Podaci </a></h6>
                                <h6> <a href="/management">Menadžment </a></h6>
                                <h6> <a href="/aktuelnos-all"> Aktuelni projekti </a></h6>
                                </div>
                        </div>
                        <div class="hldiv">
                            <h6> <a href="/obavestenja">Obavještenja</a></h6>
                        </div>
                        <div class="hldiv">
                            <h6><a href="/warrants-all">Putni nalozi</a></h6>
                        </div>
                        <div class="hldiv">
                            <h6><a href="/notices-all">Dokumentacija</a></h6>
                        </div>
                 
                    </div>
                    <div class="header-right">
                        <div>
                            <img src="/images/iconfinder_phone_216352.svg" alt="">
                            <h6><a href="tel:069095581">020 / 811 - 550</a></h6>
                        </div>
                        <div>
                            <img src="/images/Page-1.svg" alt="">
                            <h6><a href="mailto:jkzpdanilovgrad@t-com.me">jkzpdanilovgrad@t-com.me</a></h6>
                        </div>
            
                        <div class="search">
                            <img src="/images/search_1_.svg" alt="">

                        </div>
                        <div class="form-group  select2-lg  mb-0 bg-white searchText">
                            <select class="form-control  border-bottom-0" data-placeholder="Šta želite pronaći? "  id="search1"  onchange="javascript:location.href = this.value;">
                                @foreach($posts as $post)
                                <option value="/posts/{{ $post->id }}">{{ $post->title }}</option>
                                 @endforeach
                            <option value="/obavestenja">Obavještenja</option>
                            <option value="/warrants-all">Putni nalozi</option>
                            <option value="/notices-all">Dokumentacija</option>
                            <option value="/">Naslovna</option>
                            <option value="/about">O nama</option>

                        </select>
                     </div>
                    </div>
                                
                
            </ul>
        </nav>

</header>
