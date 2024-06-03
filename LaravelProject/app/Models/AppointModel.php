<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tblappoint";

    public function hasAppointmentDetail() {
        return $this->hasMany(AppointDetailModel::class, 'oid', 'odid');
    }

    public function belongtoDoctor() {
        return $this->belongsTo(DoctorModel:: class, 'cid', 'oid');
    }
}
