<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use NotificationChannels\WebPush\HasPushSubscriptions;
class ThanhNhan extends Model
{
    //
    use SoftDeletes;
    use HasPushSubscriptions;
    protected $dates = ['deleted_at'];
    protected $table = 'thannhan';
    protected $primaryKey = 'ma_than_nhan';
}
