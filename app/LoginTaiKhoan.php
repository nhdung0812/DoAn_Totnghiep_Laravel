<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Auth;
class LoginTaiKhoan extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'quantrivien';
    protected $guard = "quantriviens";
    protected $primaryKey = 'ma_quan_tri';

    protected $fillable = [
        'gmail', 'mat_khau',
    ];

    public function getPasswordAttribute(){

        return $this->mat_khau;
    }

}
