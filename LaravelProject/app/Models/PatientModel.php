<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tblpatient";
    protected $primarykey = 'pid';
    public $increamenting = false;
    protected $keyType = 'string';

    public function hasAppointmentDetail() {
        return $this->hasMany(AppointDetailModel::class, 'pid', 'odid');
    }
}
