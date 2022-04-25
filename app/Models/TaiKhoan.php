<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class TaiKhoan extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'tai_khoans';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey ='id';
    protected $fillable = [
        "id",'username', 'password','loai_tai_khoan_id','ho_ten','ngay_sinh','dia_chi','sdt',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        //'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function getAuthPassword()
    {
      return $this->password;
    }
}
