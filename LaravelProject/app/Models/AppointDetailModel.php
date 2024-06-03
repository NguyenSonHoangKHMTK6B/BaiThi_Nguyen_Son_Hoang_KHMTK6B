<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointDetailModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tblappointdetail";

    public function belongtoAppointment() {
        return $this->belongsTo(AppointModel:: class, 'oid', 'odid');
    }

    public function belongtoPatient() {
        return $this->belongsTo(PatientModel:: class, 'pid', 'odid');
    }
}
