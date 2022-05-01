<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model 
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('governorates_id');

    public function Client()
    {
        return $this->belongsTo('Client');
    }

    public function Governate()
    {
        return $this->hasMany('Governorate');
    }

    public function donationRequest()
    {
        return $this->belongsTo('App/Models\DonationRequest');
    }

}