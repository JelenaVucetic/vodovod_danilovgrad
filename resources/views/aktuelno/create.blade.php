@extends('admin.master')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
<style>
    .site-footer {
  
    position: absolute;
    width: 100%;
    bottom: 0;
}
</style>
    <div>
        <h2>Dodajte novi projekat</h2>

        <form action="{{ route('aktuelnos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class="col-sm-2 col-sm-2 control-label">Naslov</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title" required value="{{old('title')}}">
                </div>
            </div>
            <label class="col-sm-2 col-sm-2 control-label">Opis Projekta</label>

            <div class="form-group input-group control-group col-sm-10" style="padding: 15px;" >
                <input type="text" class="form-control" name="body" required value="{{old('body')}}">

            </div>
    
            <div class="form-group col-sm-10">
                <button type="submit" class="btn btn-large btn-primary" style="background: #4ECDC4; border:#4ECDC4;">Dodaj Aktuelni projekat</button>
              </div>
        </form>
    </div>
@endsection
