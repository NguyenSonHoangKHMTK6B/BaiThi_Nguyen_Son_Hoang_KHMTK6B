@extends('layout.master')
@section('Content')
<form method="get" action="{{ route('admin.patient.getPatientsbyName') }}"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <div class="mb-3">
        <label for="" class="form-label">Select Name</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectName"
            id=""
        >
            <option selected>Select Name</option>
            <option value="testosterone">testosterone</option>
            <option value="Guaifenesin">Guaifenesin</option>
            <option value="cefixime">cefixime</option>
            <option value="oxaliplatin">oxaliplatin</option>
            <option value="apraclonidine">apraclonidine</option>
            <option value="Lisinopril">Lisinopril</option>
            <option value="GLYCERIN">GLYCERIN</option>
            <option value="levetiracetam">levetiracetam</option>
            <option value="Furosemide">Furosemide</option>
            <option value="tretinoin">tretinoin</option>
            <option value="Hieu">Hieu</option>
            <option value="">....</option>  
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-info" name="btSearch">Bấm</button>
        </div>
    </div>  
</form>

<table>
    <tbody>
        <thead>
            <tr>
                <th class=\"text-center\">PID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">address</th>
                <th class=\"text-center\">phone</th>
                <th class=\"text-center\">email</th>
                <th class=\"text-center\">Edit</th>
                <th class=\"text-center\">Delete</th>
            </tr>
        </thead>
        @foreach ($patients as $patient)
        <tr>
            <td class= \"text-left\"> {{$patient-> pid}} </td>
            <td class= \"text-left\"> {{$patient -> pname}} </td>
            <td class= \"text-left\"> {{$patient -> address}} </td>
            <td class= \"text-left\"> {{$patient -> phone}} </td>
            <td class= \"text-left\"> {{$patient -> email}} </td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i>
            <a href="updatePatient/{{$patient->pid}}">Edit</a></td>
            <td class="center"><i class="fa fa-trash-o fa-fw"></i>
            <a href="deletePatient/{{$patient->pid}}"> Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
