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
        <h4 class="my-5 text-left"><i class="fa fa-angle-right mx-2"></i>Izveštaji</h4>
        <section id="unseen">
          <table class="table table-bordered table-striped table-condensed">
            <thead>
              <tr>
                <th>Naslov</th>
                <th>Fajl</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($notices as $notice)
              <tr>
                <td>{{$notice->title}}</td>
                 <td></a>
                 @if ($notice->pdf_file) 
                 <a href="/files/downloadN/{{$notice->id}}" target="_blank" style="text-decoration: none !important;">{{$notice->pdf_file}}
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