@extends('layout.master')
@section('Content')
<form method="get" action="{{ route('admin.doctor.getDoctorsbySpecialized') }}"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <div class="mb-3">
        <label for="" class="form-label">Select Specialized</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectSpecialized"
            id=""
        >
            <option selected>Select Specialized</option>
            <option value="CVS Alcohol Prep">CVS Alcohol Prep</option>
            <option value="Comtan">Comtan</option>
            <option value="Neuro">Neuro</option>
            <option value="Cilostazol">Cilostazol</option>
            <option value="Metolazone">Metolazone</option>
            <option value="Acyclovir">Acyclovir</option>
            <option value="Chuyen Khoa Than Kinh">Chuyen Khoa Than Kinh</option>
            <option value="">.....</option>
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-info" name="btSearch">Bấm</button>
        </div>
    </div>  
</form>
<table>
<tbody>
<tbody>
            <thead>
                <tr>
                    <th class=\"text-center\">CID</th>
                    <th class=\"text-center\">Cname</th>
                    <th class=\"text-center\">Specialized</th>
                    <th class=\"text-center\">Email</th>
                    <th class=\"text-center\">Address</th>
                    <th class=\"text-center\">Phone</th>
                    <th class=\"text-center\">Edit</th>
                    <th class=\"text-center\">Delete</th>
                </tr>
            </thead>
            @foreach ($doctors as $doctor)
            <tr>
                <td class= \"text-left\"> {{$doctor-> cid}} </td>
                <td class= \"text-left\"> {{$doctor -> cname}} </td>
                <td class= \"text-left\"> {{$doctor -> specialized}} </td>
                <td class= \"text-left\"> {{$doctor -> email}} </td>
                <td class= \"text-left\"> {{$doctor -> address}} </td>
                <td class= \"text-left\"> {{$doctor -> phone}} </td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="updateDoctor/{{$doctor ->cid}}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                <a href="deleteDoctor/{{$doctor ->cid}}"> Delete</a></td>

            </tr>
            @endforeach
        </tbody>
</table>

@endsection
