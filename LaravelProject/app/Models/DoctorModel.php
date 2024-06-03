<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tbldoctor";
    protected $primarykey = 'cid';
    public $increamenting = false;
    protected $keyType = 'string';

    public function hasAppointment() {
        return $this->hasMany(AppointModel::class, 'cid', 'oid');
    }
}
