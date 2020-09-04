<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    //
    use SoftDeletes;   
    protected $dates = ['deleted_at'];
    protected $table = 'Role_user';
    protected $primaryKey = 'id';
}
