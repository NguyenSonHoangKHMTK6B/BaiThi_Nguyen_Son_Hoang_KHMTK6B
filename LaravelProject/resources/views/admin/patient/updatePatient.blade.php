@extends('layout.master')
@section('Content')

@if(session('Note'))
    <div class="alert alert-success">
        {{session('Note')}}
    </div>
@endif

@if($patients) <!-- <?php //biến $patients check xem có null không ?> -->
<form action="{{ route('admin.patient.updatePatient', ['pid' => $patients->pid]) }}" method="post" enctype="multipart/form-data">
    @csrf    
    <div class="mb-3">
        <label class="form-label" for="pname">Name</label>
        <input type="text"class="form-control" id="pname" name="pname" value="{{ $patients->pname }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $patients->address}}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $patients->phone }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $patients->email }}">
    </div>
    <button class="btn btn-info" type="submit" name="btUpdate">Update</button>
</form>
@else
    <div>Product not found.</div>
@endif
@endsection
