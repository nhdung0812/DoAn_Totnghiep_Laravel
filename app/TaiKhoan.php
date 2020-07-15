<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TaiKhoan extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'quantrivien';
    protected $primaryKey = 'ma_quan_tri';
}
