<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_date_ar extends Model
{
    use HasFactory;

    
    protected $fillable = [
            'الاسم',
            'البريد',
            'الهاتف',
            'كلمه-المرور',
            'القسم',
            'عمل',
            'الموقع',
            'المدينة',
            'الشهادة-العلمية',
            'كارنيه-النقابة',
            'صوره-العياده',
            'الشعار',
            'صوره-الطبيب',
            'الرخصه-المهنيه'];
}

; 