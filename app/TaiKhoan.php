<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class TaiKhoan extends Model
{
    use SoftDeletes , Notifiable , HasRoles;   
    protected $dates = ['deleted_at'];
    protected $table = 'quantrivien';
    protected $primaryKey = 'ma_quan_tri';
}
