<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    //
    protected $dates = ['deleted_at'];
    protected $table = 'Hinh_Anh';
    protected $primaryKey = 'ma_hinh_anh';
}
