<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use NotificationChannels\WebPush\HasPushSubscriptions;
class DiaDiem extends Model
{
    //
    use SoftDeletes;
    use HasPushSubscriptions;
    protected $dates = ['deleted_at'];
    protected $table = 'diadiem';
    protected $primaryKey = 'ma_dia_diem';
}
