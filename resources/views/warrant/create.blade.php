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
.datepicker td, .datepicker th {
    width: 2.5rem;
    height: 2.5rem;
    font-size: 0.85rem;
}

.datepicker {
    margin-bottom: 3rem;
}
.datepicker-dropdown {
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
</style>
    <div>
        <h2>Dodajte novi putni nalog</h2>

        <form action="{{ route('warrants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="display: flex;flex-direction: column;">
                <label class="col-sm-2 col-sm-2 control-label">Naslov</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title" required value="{{old('title')}}">
                </div>
            </div>
   <!-- Date Picker Input -->
   <div class="form-group mb-4">
    <div class="datepicker date input-group p-0 shadow-sm">
        <input type="text" placeholder="Choose a reservation date" class="form-control py-4 px-4" id="reservationDate">
        <div class="input-group-append"><span class="input-group-text px-4"><i class="fa fa-clock-o"></i></span></div>
    </div>
</div><!-- DEnd ate Picker Input -->
            <div class="form-group input-group control-group col-sm-10" style="padding: 15px;" >
                <label for="pdf_file" >Dodaj dokumnet</label>
                 {{Form::file('pdf_file')}}
            </div>
    
            <div class="form-group col-sm-10">
                <button type="submit" class="btn btn-large btn-primary" style="background: #4ECDC4; border:#4ECDC4;">Dodajte putni nalog</button>
              </div>
        </form>
    </div>   

   

    <script src="/admin/lib/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script>
        $(function () {

// INITIALIZE DATEPICKER PLUGIN
$('.datepicker').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy"
});


// FOR DEMO PURPOSE
$('#reservationDate').on('change', function () {
    var pickedDate = $('input').val();
    $('#pickedDate').html(pickedDate);
});
});
    </script>


@endsection
