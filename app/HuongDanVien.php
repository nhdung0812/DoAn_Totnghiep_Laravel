<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HuongDanVien extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'huongdanvien';
    protected $primaryKey = 'ma_hdv';
}
