@extends('admin.master')
@section('content')


<div class="modal fade" id="deleteModalA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5 class="modal-title" id="myModalLabel">Da li ste sigurni da želite da obrišete ovaj dokument?</h5>
        </div>
        <div class="modal-body">
         <form id="delete-formA" method="post">
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
        <h4><i class="fa fa-angle-right"></i>Projekti</h4>
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
            @foreach ($aktuelnos as $aktuelno)
              <tr>
                <td>{{$aktuelno->id}}</td>
                <td>{{$aktuelno->title}}</td>
             <td>{{$aktuelno->body}}</td>
               <td> 
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalA"
                            data-id="{{ $aktuelno->id }}"
                            data-title="{{ $aktuelno->title }}"
                            data-body="{{ $aktuelno->body }}"
                            >
                            Izmijeni
                    </button></td> 
                <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalA"
                    data-id="{{ $aktuelno->id }}"
                    data-title="{{ $aktuelno->title }}">Obriši</button></td>
              </tr>  
            @include('modals.editModalAktuelno')
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