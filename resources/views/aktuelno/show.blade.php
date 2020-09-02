@extends('layouts.master')
@section('arrow.css')

@endsection
@section('content')
<link rel="stylesheet" href="/css/post.css">

<div class="post">
    <div class="arrowBack"><a href="/"><img src="/images/backArrow.svg" alt=""></a></div>
                <div class="single-post">
                    <h2>{{ $aktuelno->title }}</h2>
               
                    <div>
                        <p>{!!$aktuelno->body!!}</p>
                    </div>
                </div>


</div>
@endsection
