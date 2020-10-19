@extends('layouts.master')

@section('content')

    <!-- Hero
    ================================================== -->
    @include('layouts.hero')
    <!-- Hero End -->

    <div class="postsDiv">
        <h2 class="index-title">OBAVJEŠTENJA</h2>
        @if(count($posts)>0)
        @php
        $colcount = count($posts);
                $i = 1;
        @endphp
                @foreach ($posts as $post)
            
                <div class=" post-row my-5 " id="row{{$i}}">
                    <div class="post-content">
                        <div class="post-right mob">
                            <img src="/photos/{{$post->cover_image}}" alt="">
                        </div>
                        <div class="post-left">
                            <div class="post-title">
                                <h3>{{$post->title}}</h3>
                            </div>
                            <div class="post-body">
                                <div class="post-meta">
                                    <p class="ghost pMarg">{{$post->created_at->format('d.m.Y.')}}</p> <br>
                                
                                </div>
                                <p style="
                                margin-top: 0;
                                    ">  @php
                                                                
                                            echo substr($post->body, 0, 200);
                                        @endphp ...</p>
                            </div>
                            <div class="post-bottom">
                                <div>
                                    <button><h6> <a href="/posts/{{$post->id}}">Pogledaj detaljnije</a> </h6></button>
                                </div>
                              <div class="social-desctop my-3">
                     <!-- Sharingbutton Facebook -->
                     <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fvik-dg.me%2F%2Fposts%2F{{$post->id}}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                  <img src="/images/iconfindersocial.png" alt="">     
                        </div>
                        </div>
                    </a>
                    
                    <!-- Sharingbutton Twitter -->
                    <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=https%3A%2F%2Fvik-dg.me%2Fposts%2F{{$post->id}}" target="_blank" rel="noopener" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <img src="/images/iconfinder.svg" alt=""  >
                        </div>
                        </div>
                    </a>
                    <!-- Sharingbutton E-Mail -->
             
                    <button class="resp-sharing-button__link" onclick="copyToClipboard('#p1')">
                        <p id="p1" style="display: none">https://vik-dg.me/posts/ {{$post->id}}</p>
                        <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <img src="/images/Component.svg" alt=""  >
                        </div>
                        </div>
                    </button>
                  
                                </div> 
                            </div>
                        </div>
                        <div class="post-right web">
                            <img src="/photos/{{$post->cover_image}}" alt="">
                        </div>
                    </div>
                    <div class="arrow"></div>
                </div>
                <?php
                if ($i++ == 4)
                break;
                ?>

                @endforeach
                @else  
                <h1>Trenutno nema obavestenja</h1>
                @endif
         <div class="strelice" >
             <a href="/obavestenja">
            <svg id="more-arrows">
                <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>
                <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>
                <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
            </svg>
        </a>
        </div> 
    </div>
 {{--    <div class="history">
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
                <button> <h6> <a href="/about">Pročitaj više</a> </h6> </button>
            </div>
        </div>
    </div> --}}
  {{--   <div class="history-phone">
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
                <button class="phoneBut"><h6> <a href="/about">Pročitaj više</a> </h6></button>
            </div>
        </div>
    </div> --}}<!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@endsection
