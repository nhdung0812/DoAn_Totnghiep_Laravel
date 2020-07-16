<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChuongTrinhTour extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'chuongtrinhtour';
    protected $primaryKey = 'ma_tour';
}
