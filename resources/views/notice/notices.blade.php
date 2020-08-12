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
        <h4 class="my-5 text-left"><i class="fa fa-angle-right mx-2"></i>Dokumentacija</h4>
        <section id="unseen">
          <table class="col-l-12 col-xl-12 col-sm-12 col-xs-12  table  table-hover table-condensed">
            <thead>
              <tr>
                <th>Dokument</th>
                <th>Fajl</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($notices as $notice)
              <tr>
                <td>    
                  {{$notice->title}}</td>
                 <td>
                  <a href="/izvestaji/{{$notice->pdf_file}}" target="new">
                   Preuzmite dokument</a>
            {{--    @if ($notice->pdf_file) 
                 <a href="/files/downloadN/{{$notice->id}}" target="_blank" style="text-decoration: none !important;">{{$notice->pdf_file}}
                </a>
              @endif  --}}
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