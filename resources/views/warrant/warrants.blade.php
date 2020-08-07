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
        <h4 class="my-5"><i class="fa fa-angle-right mx-2"></i>Putni nalozi</h4>
        <section id="unseen">
          <table class="table table-bordered table-striped table-condensed">
            <thead>
              <tr>
                <th>Naslov</th>
                <th>Fajl</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($warrants as $warrant)
              <tr>
                <td>{{$warrant->title}}</td>
                 <td></a>
                 @if ($warrant->pdf_file) 
                 <a href="/files/downloadW/{{$warrant->id}}" target="_blank" style="text-decoration: none !important;">{{$warrant->pdf_file}}
                </a>
              @endif
            </td>
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