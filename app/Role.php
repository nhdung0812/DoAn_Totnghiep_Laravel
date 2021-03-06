<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Permission;
class Role extends Model
{
    //
    use SoftDeletes;   
    protected $dates = ['deleted_at'];
    protected $table = 'roles';
    protected $primaryKey = 'id';
    
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}
