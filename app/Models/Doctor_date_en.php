<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_date_en extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'password', 'department','job','city', 'location','scientific_certificate_image','syndicate_image', 'clinic_photos','logo','doctor_image','professional_license'];
}
