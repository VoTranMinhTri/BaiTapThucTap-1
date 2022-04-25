<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $casts = [
    //     'ngay_su_dung' => 'datetime:d/m/Y', // Định dạng lại ngày
    // ];
}
