<header class="header sticky-top">
    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
    <div>
        <a href="/"><img class="hedimg" src="/images/Component3–1.png" alt="" id="logo"></a>


        <nav>
            <ul class="nav-list">
                <div class="header-content">

                    <div class="header-left">

                        <div>
                            <h6><a href="/">Naslovna</a></h6>
                        </div>
                        <div>
                            <h6> <a href="/about">O nama</a></h6>
                        </div>
                        <div>
                            <h6> <a href="/obavestenja">Obavještenja</a></h6>
                        </div>
                        <div>
                            <h6><a href="/warrants-all">Putni nalozi</a></h6>
                        </div>
                        <div>
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
                            <h6><a href="mailto:vik@danilovgrad.me">vik@danilovgrad.me</a></h6>
                        </div>
            
                        <div class="search">
                            <img src="/images/search_1_.svg" alt="">

                        </div>
                        <div class="form-group  select2-lg  mb-0 bg-white searchText">
                            <select class="form-control  border-bottom-0" data-placeholder="Šta želite pronaći? "  id="search1"  onchange="javascript:location.href = this.value;">
                                <option value="#">Šta želite pronaći? </option>
                                @foreach($posts as $post)
                                <option value="/posts/{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select>
                     </div>
                    </div>
                                
                
            </ul>
        </nav>

</header>
