<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuKien extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $casts = [
    //     'ngay_bat_dau' => 'datetime:d/m/Y', // Định dạng lại ngày
    //     'ngay_ket_thuc' => 'datetime:d/m/Y',
    // ];
}
