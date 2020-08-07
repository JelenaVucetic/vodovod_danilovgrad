@extends('layouts.master')

@section('content')

    <!-- Hero
    ================================================== -->
    @include('layouts.hero')
    <!-- Hero End -->

    <div class="postsDiv">
        <h2 class="index-title">KORISNIČKE INFORMACIJE</h2>
        @foreach ($posts as $post)
        @php
            $count = 1;
        @endphp
        <div class=" post-row" id="row{{$count}}">
            <div class="post-content">
                <div class="post-left">
                    <div class="post-title">
                        <h3>{{$post->title}}</h3>
                    </div>
                    <div class="post-body">
                        <div class="post-meta">
                            <p class="ghost">{{$post->created_at->format('d.m.Y.')}}</p> <br>
                            <div class="social-phone">
                                <img src="/images/iconfindersocial.png" alt="" style="width: 25px;">
                                <img src="/images/iconfinder.svg" alt=""  style="width: 25px;">
                                <img src="/images/Component.svg" alt=""  style="width: 25px;">
                            </div>
                        </div>
                        <p style="
                        margin-top: 0;
                    ">  @php
												
                            echo substr($post->body, 0, 335);
                        @endphp</p>
                    </div>
                    <div class="post-bottom">
                        <div>
                            <button><h6> <a href="/posts/{{$post->id}}">Pogledaj detaljnije</a> </h6></button>
                        </div>
                        <div class="social-desctop">
                            <img src="/images/iconfindersocial.png" alt="" style="width: 25px;">
                            <img src="/images/iconfinder.svg" alt=""  style="width: 25px;">
                            <img src="/images/Component.svg" alt=""  style="width: 25px;">
                        </div>
                    </div>
                </div>
                <div class="post-right">
                    <img src="/photos/{{$post->cover_image}}" alt="">
                </div>
            </div>
            <div class="arrow"></div>
        </div>
        @endforeach
         <div class="strelice" >
            <svg id="more-arrows">
                <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>
                <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>
                <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
            </svg>
        </div> 
    </div>
    <div class="history">
        <div class="historyD">
            <h2 class="histroyH">ISTORIJAT NASTANKA DANILOVGRADSKOG VODOVODNOG SISTEMA</h2>
            <div class="histroy-content">
                <div class="history-left">
                    <p>
                        Danilovgradski vodovodni sistem, posle cetinjskog, je najstariji vodovodni sistem u Crnoj Gori.
                        Da bi se stanovništvu Danilovgrada i okolnih sela obezbijedili što povoljniji životni uslovi,
                        početkom poslednje decenije devetnaestog vijeka odlučeno je da se u varoš dovede pitka voda sa
                        Slatinskih izvora. Za izradu Projekta vodovoda, angažovan je inženjer Marko Đukanović.
                        Knjaz Nikola je 1896.god. u Moskvi prisustvovao krunisanju ruskog cara Nikolaja II Romanova,
                        i tom prilikom poznati ljekar i profesor medicinskog fakulteta u Moskvi, Gligorij Antonovič – Zaharin,
                        poklonio je Knjazu Nikoli 45.000 zlatnih rubalja za izgradnju vodovoda za Cetinje i Danilovgrad.
                        Čelične cijevi za vodovod kupljene su u Austrougarskoj, parabrodom dovezene u Kotor, odakle su ih
                        mještani, na svojim ramenima, donijeli do Danilovgrada. Kopanje kanala za cjevovode, kao i za sve
                        druge građevinske radove, obavljali su mještani „kulukom“ (obaveznim radom koji se ne plaća).
                        I tako je voda iz prve danilovgradske česme potekla na Petrov dan davne 1897.god., sa slatinskog
                        izvorišta „Bistiga“. <br> <br> Nakon toga nastavljeno je širenje vodovodne mreže, pa se sada stanovnici
                        Danilovgrada snabdijevaju pitkom vodom sa 7 izvorišta: „Oraška jama“, „Milojevića vrelo“,
                        „Viško vrelo“, „Brajovića jama“, „Žarića jama“, „Slatinski izvori“ i „Mareza“. Danilovgradski
                        vodovodni sistem takođe je jedan od najkompleksnijih vodovodnih sistema u Crnoj Gori,
                        zbog razuđenosti teritorije na kojoj se vrše usluge vodosnabdijevanja.
                        Dužina vodovodne mreže iznosi oko 700km, i njome je pokriveno oko 85% stanovništva
                        opštine Danilovgrad, dok rezervoarski prostor iznosi 1.845m³.
                    </p>
                </div>
                <div class="history-right">
                    <img src="/images/Image 1.png" alt="">
                    <div class="image-title">
                        <p>Gligorij Antonovič Zaharin</p>
                    </div>
                </div>
            </div>
          
            <div class="history-button">
                <button> <h5> <a href="/about">Pročitaj više</a> </h5> </button>
            </div>
        </div>
    </div>
    <div class="history-phone">
        <div class="historyD">
            <h2 class="histroyH">ISTORIJAT <br> NASTANKA DANILOVGRADSKOG VODOVODNOG SISTEMA</h2>
            <div class="histroy-content">
                <div class="">
                    <p>
                        Danilovgradski vodovodni sistem, posle cetinjskog, je najstariji vodovodni sistem u Crnoj Gori.
                        Da bi se stanovništvu Danilovgrada i okolnih sela obezbijedili što povoljniji životni uslovi,
                        početkom poslednje decenije devetnaestog vijeka odlučeno je da se u varoš dovede pitka voda sa
                        Slatinskih izvora. Za izradu Projekta vodovoda, angažovan je inženjer Marko Đukanović.
                        Knjaz Nikola je 1896.god. u Moskvi prisustvovao krunisanju ruskog cara Nikolaja II Romanova,
                        i tom prilikom poznati ljekar i profesor medicinskog fakulteta u Moskvi,
                    </p>
                    <div class="" style="text-align:center">
                        <img src="/images/Image 1.png" alt="">
                        <div class="image-title">
                            <p>Gligorij Antonovič Zaharin</p>
                        </div>
                    </div>
                    <p style="margin-top: 15px;">
                        Gligorij Antonovič – Zaharin, poklonio je Knjazu Nikoli 45.000 zlatnih rubalja za izgradnju vodovoda za Cetinje i Danilovgrad. Čelične cijevi za vodovod kupljene su u Austrougarskoj, parabrodom dovezene u Kotor, odakle su ih mještani, na svojim ramenima, donijeli do Danilovgrada. Kopanje kanala za cjevovode, kao i za sve druge građevinske radove, obavljali su mještani „kulukom“ (obaveznim radom koji se ne plaća). I tako je voda iz prve danilovgradske česme potekla na Petrov dan davne 1897.god., sa slatinskog izvorišta „Bistiga“. 
                    </p>
                </div>
            </div>
            <div class="history-button my-5">
                <button class="phoneBut"><h5> <a href="/about">Pročitaj više</a> </h5></button>
            </div>
        </div>
    </div>
@endsection
