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
        <h2>Dodajte novi putni nalog</h2>

        <form action="{{ route('warrants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class="col-sm-2 col-sm-2 control-label">Datum</label>
                <div class="col-sm-10">
                    <input type="date" id="date" placeholder="DD-MM-YYYY" name="date">
                </div>
            </div>
            <div class="form-group input-group control-group col-sm-10" style="padding: 15px;" >
                <label for="pdf_file" >Dodaj dokumnet</label>
                 {{Form::file('pdf_file')}}
            </div>
    
            <div class="form-group col-sm-10">
                <button type="submit" class="btn btn-large btn-primary" style="background: #4ECDC4; border:#4ECDC4;">Dodajte putni nalog</button>
              </div>
        </form>
    </div>   
 {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> --}}


@endsection
