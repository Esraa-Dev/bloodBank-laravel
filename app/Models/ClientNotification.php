<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientNotification extends Model 
{

    protected $table = 'client_notifications';
    public $timestamps = true;
    protected $fillable = array('is_read', 'client_id', 'notification_id');

}