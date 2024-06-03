@extends('layout.master')
@section('Content')
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
