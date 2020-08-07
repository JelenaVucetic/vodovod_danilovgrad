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
               <img src="/photos/{{$post->cover_image}}" alt="">
           </div>
           <div>
               <p>{{$post->body}}</p>
           </div>
       </div>
        @foreach ($posts as $post)
            <div class="row post-row">
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
    </div>
@endsection
