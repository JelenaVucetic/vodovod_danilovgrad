@extends('layouts.master')
@section('arrow.css')

@endsection
@section('content')
<link rel="stylesheet" href="/css/post.css">

<div class="post">
    <div class="arrowBack"><a href="/"><img src="/images/backArrow.svg" alt=""></a></div>
                <div class="single-post">
                    <h2>{{ $post->title }}</h2>
                    <div class="single-post-img">
                        <img src="/photos/{{ $post->cover_image }}" alt="">
                    </div>
                    <div>
                        <p>{!!$post->body!!}</p>
                    </div>
                </div>


                @foreach ($posts as $post)
                @php
                    $count = 1;
                @endphp
                      <div class=" post-row my-5 " id="row{{$count}}">
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
                                            @endphp</p>
                                </div>
                                <div class="post-bottom">
                                    <div>
                                        <button><h6> <a href="/posts/{{$post->id}}">Pogledaj detaljnije</a> </h6></button>
                                    </div>
                                  <div class="social-desctop my-3">
        
                                                            <!-- Sharingbutton Facebook -->
                                                <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fvikdanilovgrad.qqriq.me%2Fposts%2F{{$post->id}}" target="_blank" rel="noopener" aria-label="">
                                                    <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                              <img src="/images/iconfindersocial.png" alt="">     
                                                    </div>
                                                    </div>
                                                </a>
                                                
                                                <!-- Sharingbutton Twitter -->
                                                <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Share&amp;url=https%3A%2F%2Fvikdanilovgrad.qqriq.me%2Fposts%2F{{$post->id}}" target="_blank" rel="noopener" aria-label="">
                                                    <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                                        <img src="/images/iconfinder.svg" alt=""  >
                                                    </div>
                                                    </div>
                                                </a>
                                                
                                                <!-- Sharingbutton E-Mail -->
                                          
                                        <button class="resp-sharing-button__link" onclick="copyToClipboard('#p1')">
                                            <p id="p1" style="display: none">https://vikdanilovgrad.qqriq.me/posts/ {{$post->id}}</p>
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
                @endforeach
</div>
@endsection
