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
    <div>
        <h2>Dodajte novu objavu</h2>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class="col-sm-2 col-sm-2 control-label">Naslov</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title" required value="{{old('title')}}">
                </div>
            </div>
            <div class="form-group input-group control-group col-sm-10" style="padding: 15px;" >
                <label class="col-sm-2 col-sm-2 control-label" style="padding-left: 0px;">Dodajte naslovnu fotografiju</label>
                <input type="file" name="cover_image" class="form-control" required  >
            </div> 
            <div class="form-group input-group control-group increment col-sm-10" style="padding: 15px;" >
                <label class="col-sm-2 col-sm-2 control-label" style="padding-left: 0px;">Dodajte fotografije</label>
                <input type="file" name="photos[]" class="form-control" multiple     >
                {{-- <div class="input-group-btn" style="vertical-align: bottom;"> 
                  <button class="btn btn-success" type="button" style="background: #4ECDC4;border-color: #4ECDC4;" ><i class="glyphicon glyphicon-plus" ></i>Dodaj</button>
                </div> --}}
            </div>   
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class="col-sm-2 col-sm-2 control-label">Odaberite kategoriju</label>
                <div class="col-sm-10">
                    <select id="" name="category_id">
                        <option value="1">Kategorija1</option>
                        <option value="2">Kategorija2</option>
                        <option value="3">Kategorija3</option>
                    </select>
                </div>
              </div>   
            <div class="form-group col-sm-10" style="margin: 30px 0">
                <label class="col-sm-2 col-sm-2 control-label" style="padding-left: 0px;">Opis</label>
                <textarea class="form-control" name="body" id="" rows="5" required> {{old('body')}}</textarea>
                <div class="validate"></div>
            </div>
            <div class="form-group col-sm-10">
                <button type="submit" class="btn btn-large btn-primary" style="background: #4ECDC4; border:#4ECDC4;">Dodajte objavu</button>
              </div>
        </form>
    </div>
@endsection