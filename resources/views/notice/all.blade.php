@extends('admin.master')
@section('content')


<div class="modal fade" id="deleteModalN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5 class="modal-title" id="myModalLabel">Da li ste sigurni da želite da obrišete ovaj dokument?</h5>
        </div>
        <div class="modal-body">
         <form id="delete-formN" method="post">
            @csrf
            @method('DELETE')
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class= "control-label" style="padding: 0 15px;">Naslov</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="delete-title" disabled>
                </div>
            </div>
            <button type="button" class="btn btn-primary  confirm-delete-btn">Obriši</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="col-lg-12">
      <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i>Dokumentacija</h4>
        <section id="unseen">
          <table class="table table-bordered table-striped table-condensed">
            <thead>
              <tr>
                <th>Id</th>
                <th>Naslov</th>
                <th>Fajl</th>
                <th>Izmijeni</th>
                <th>Obriši</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($notices as $notice)
              <tr>
                <td>{{$notice->id}}</td>
                <td>{{$notice->title}}</td>
             <td>{{$notice->pdf_file}}</td>
               <td> 
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalN"
                            data-id="{{ $notice->id }}"
                            data-title="{{ $notice->title }}"
                            data-pdf_file="{{ $notice->pdf_file }}"
                            >
                            Izmijeni
                    </button></td> 
                <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalN"
                    data-id="{{ $notice->id }}"
                    data-title="{{ $notice->title }}">Obriši</button></td>
              </tr>  
            @include('modals.editModalNotice')
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