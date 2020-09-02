@extends('layouts.master')
@section('content')
<style>
  .map{
    display: none;
  }
</style>

<div class=" tableI">

    <div class="col-lg-12">
      <div class="content-panel">
        <h4 class="my-5 text-left"><i class="fa fa-angle-right mx-2"></i>Aktuelni projekti</h4>
        <section id="unseen">
          <table class="col-l-12 col-xl-12 col-sm-12 col-xs-12  table  table-hover table-condensed">
            <thead>
              <tr>
                <th>Naziv projekta</th>
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