@extends('layouts.master')
@section('arrow.css')
    <style>
        .arrow {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="container">
       <div class="single-post">
            <h1>{{ $post->title }}</h1>
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
                            <h2>{{$post->title}}</h2>
                        </div>
                        <div class="post-body"><div class="post-meta">
                                <span>{{$post->created_at->format('d.m.Y.')}}</span> <br>
                                <div class="social-phone">
                                    <img src="/images/iconfindersocial.png" alt="" style="width: 25px;">
                                    <img src="/images/iconfinde.svg" alt=""  style="width: 25px;">
                                    <img src="/images/Component.svg" alt=""  style="width: 25px;">
                                </div>
                            </div>
                            <p>{{$post->body}}</p>
                        </div>
                        <div class="post-bottom">
                            <div>
                                <button> <a href="">Pogledaj detaljnije</a> </button>
                            </div>
                            <div class="social-desctop">
                                <img src="/images/iconfinder_social-02_3146790.png" alt="" style="width: 25px;">
                                <img src="/images/iconfinder_4_939755.svg" alt=""  style="width: 25px;">
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
