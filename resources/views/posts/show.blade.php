@extends('layouts.master')

@section('content')
    <div class="container">
       <div class="single-post">
            <h1>{{ $post->title }}</h1>
           <div>
               <img src="/photos/{{$post->cover_image}}" alt="">
           </div>
           <div>
               <p>{{$post->body}}</p>
           </div>
       </div>
        @foreach ($posts as $post)
            <div class="row" style="margin-bottom: 20px; border-bottom: 1px solid #0000FE;">
                <div class="post-content">
                    <div class="post-left">
                        <div class="post-title">
                            <h2>{{$post->title}}</h2>
                        </div>
                        <div class="post-body">
                            <span>{{$post->created_at->format('d.m.Y.')}}</span> <br>
                            <p>{{$post->body}}</p>
                        </div>
                        <div class="post-bottom">
                            <div>
                                <button> <a href="">Pogledaj detaljnije</a> </button>
                            </div>
                            <div>
                                <img src="/images/iconfinder_social-02_3146790.png" alt="" style="width: 25px;">
                                <img src="/images/iconfinder_social-02_3146790.png" alt=""  style="width: 25px;">
                                <img src="/images/iconfinder_social-02_3146790.png" alt=""  style="width: 25px;">
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
    </div>
    <div class="history">
        <div class="container">
            <h1>ISTORIJAT NASTANKA DANILOVGRADSKOG VODOVODNOG SISTEMA</h1>
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
                </div>
            </div>
            <div class="image-title">
                <span>Gligorij Antonovič Zaharin</span>
            </div>
            <div class="history-button">
                <button> <a href="">Pročitaj više</a> </button>
            </div>
        </div>

    </div>
@endsection
