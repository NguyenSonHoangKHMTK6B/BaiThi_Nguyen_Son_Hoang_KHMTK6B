<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorModel;

class DoctorController extends Controller
{
    public function index() {
        return view('doctor'); //trả về trang customer.blade.php
    }

    function getDoctor() {
        $doctors = DoctorModel::all();
        return view('admin.doctor.getDoctors', ['doctors' => $doctors]);
    }

    function getDoctorsbySpecialized(Request $request) {
        $sp = $request->input('selectSpecialized');
        $doctors = DoctorModel::where('specialized', $sp)->get();
        return view('admin.doctor.getDoctorsbySpecialized', ['doctors' => $doctors]);
    }

    function forminsertDoctor() {
        return view('admin.doctor.insertDoctor');
    }

    function insertDoctor(Request $request) {
        $doctors = new DoctorModel;
        $doctors->cid = 0;
        $doctors->cname = $request->cname;
        $doctors->specialized = $request->specialized;
        $doctors->address = $request->address;
        $doctors->phone = $request->phone;
        $doctors->email = $request->email;

        $doctors->save();
        return redirect('admin/doctor/insertDoctor')
        ->with("Note", "Thêm thành công.");
    }
}
