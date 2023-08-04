<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['telephone','patient_name','patient_dob','patient_idno','patient_address','patient_county','sub_county','patient_email','patient_gender','patient_marital_status','kin_name','kin_dob','kin_idno','kin_gender','kin_relationship','kin_telephone',
];
}
