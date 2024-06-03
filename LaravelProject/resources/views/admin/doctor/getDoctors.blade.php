@extends('layout.master')
@section('Content')
    <table>
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
