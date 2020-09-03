@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="/css/about.css">
<style>
  .map{
    display: none;
  }
</style>

<div class=" tableI about">
  <div class="arrowBack"><a href="/"><img src="/images/backArrow.svg" alt=""></a></div>

  <h2 class="about-title">AKUTELNI PROJEKTI</h2>
    <div class="col-lg-12">
      <div class="content-panel">
        <section id="unseen">
          <table class="col-l-12 col-xl-12 col-sm-12 col-xs-12  table  table-hover table-condensed">
            <thead>
              <tr>
                <th>Naziv </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($aktuelnos as $aktuelno)
              <tr>
                <td>    
                <a href="/aktuelnos/{{$aktuelno->id}}">
                  {{$aktuelno->title}}</a></td>
                
              </tr>  
     
            @endforeach
            </tbody>
          </table>
        </section>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-lg-4 -->
  </div>
@endsection