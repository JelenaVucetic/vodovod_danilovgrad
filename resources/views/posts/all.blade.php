@extends('admin.master')
@section('content')

<h1 class="text-center my-4">Početna Admin Strana</h1>
<!--Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5 class="modal-title" id="myModalLabel">Da li ste sigurni da želite da obrišete ovo obavještenje?</h5>
        </div>
        <div class="modal-body">
         <form id="delete-form" method="post">
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
        <h4><i class="fa fa-angle-right"></i>Obavještenja</h4>
        <section id="unseen">
          <table class="table table-bordered table-striped table-condensed">
            <thead>
              <tr>
                <th>Id</th>
                <th>Naslov</th>
                <th>Slike</th>
{{--                 <th>Kategorija</th>
 --}}                <th>SadrŽaj</th>
                <th>Izmijeni</th>
                <th>Obriši</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>
                    @php $count_images = 0; @endphp
                    @foreach ($post->images as $image)
                   <img src="/photos/{{$image->name}}" alt="" style="width:50px;"> 
                   @php $count_images++; @endphp
                    @endforeach
                </td>
{{--                 <td>{{$post->category_id}}</td>
 --}}                <td> @php
												
                        echo substr($post->body, 0, 200);
                        @endphp</td>
                <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"
                            data-id="{{ $post->id }}"
                            data-title="{{ $post->title }}"
                            data-body="{{ $post->body }}"
                            data-category="{{ $post->category_id }}"
                            data-countimages = {{ $count_images}}
                            <?php  $i=0;?>
                            @foreach ($post->images as $image)
                             data-image<?php echo $i ?> = {{$image->name}}
                             data-imageid<?php echo $i ?> = {{$image->id}}
                             <?php $i++?>
                             @endforeach
                          
                            >
                            Izmijeni
                    </button></td>
                <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
                    data-id="{{ $post->id }}"
                    data-title="{{ $post->title }}">Obriši</button></td>
              </tr>  
              
            @include('modals.editModal')
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