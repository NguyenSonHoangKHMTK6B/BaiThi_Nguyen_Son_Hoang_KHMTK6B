<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientModel;

class PatientController extends Controller
{
    function getPatient() {
        $patient = PatientModel::all();
        return view('admin.patient.getPatients', ['patient' => $patient]);
    }

    function getPatientsbyName(Request $request) {
        
        $Name = $request->input('selectName');
        $patients = PatientModel::where('pname', $Name)->get();
        return view('admin.patient.getPatientsbyName', ['patients' => $patients]);
    }

    function forminsertPatient() {
        return view('admin.patient.insertPatient');
    }

    function insertPatient(Request $request) {
        $patients = new PatientModel;
        $patients->pid = $request->id;
        $patients->pname = $request->pname;
        $patients->address = $request->address;
        $patients->phone = $request->phone;
        $patients->email = $request->email;

        $patients->save();
        return redirect('admin/patient/insertPatient')
        ->with("Note", "Thêm thành công.");
    }

    function editPatient($id)
    {
        $patients = PatientModel::where('pid',$id)->first();
        return view('admin.patient.updatePatient', compact('patients'));
    }

    function updatePatient(Request $request, $id)
    {
        $patients = PatientModel::where('pid',$id)->first();
        
        $patients->pid = $request->pid;
        $patients->pname = $request->pname;
        $patients->address = $request->address;
        $patients->phone = $request->phone;
        $patients->email = $request->email;
        
        $patients->save();
        return redirect()->route('admin.patient.getPatientsbyName')
        ->with('success', 'Sửa bệnh nhân thành công.');
    }

    function deletePatient($id)
    {
        $patients = PatientModel::where('pid',$id)->first();
        $patients->delete();
        return redirect()->route('admin.patient.getPatientsbyName')
        ->with('success', 'Xóa bệnh nhân thành công.');
    }

}
