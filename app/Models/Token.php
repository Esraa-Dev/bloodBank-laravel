<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model 
{

    protected $table = 'tokens';
    public $timestamps = true;
    protected $fillable = array('api_token', 'token', 'platform', 'client_id');

    public function clients()
    {
        return $this->belongsTo('Client');
    }

}