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
        <h2>Dodajte novi dokument</h2>

        <form action="{{ route('notices.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class="col-sm-2 col-sm-2 control-label">Naslov</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title" required value="{{old('title')}}">
                </div>
            </div>
            <div class="form-group input-group control-group col-sm-10" style="padding: 15px;" >
                <label for="pdf_file" >Dodaj dokumnet</label>
                 {{Form::file('pdf_file')}}
            </div>
            <div class="form-group col-md-3">
                <label for="document_categories_id	">Kategorija dokumenta</label>
                <select id="document_categories_id	" class="form-control" name="document_categories_id	">
                    @forelse($categories as $category)
                        <option value={{ $category->id }}>{{ $category->title }}</option>
                    @empty
                        <option selected>No Locations</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group col-sm-10">
                <button type="submit" class="btn btn-large btn-primary" style="background: #4ECDC4; border:#4ECDC4;">Dodajte dokument</button>
              </div>
        </form>
    </div>
@endsection
