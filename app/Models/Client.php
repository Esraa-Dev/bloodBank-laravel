<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable

{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'password', 'date_of_birth', 'last_donation_date', 'pin_code', 'blood_type_id', 'city_id');

protected $hidden=[
    'password','api token'
];

    public function bloodType()
    {
        return $this->belongsTo('App/Models\BloodType');
    }

    public function city()
    {
        return $this->belongsTo('App/Models\City');
    }

    public function posts()
    {
        return $this->belongsToMany('App/Models\Post');
    }

    public function donationRequests()
    {
        return $this->hasMany('App/Models\DonationRequest');
    }

    public function contacts()
    {
        return $this->hasMany('Contact');
    }

    public function notifications()
    {
        return $this->belongsToMany('App/Models\Notification');
    }

    public function governorates()
    {
        return $this->belongsToMany('App/Models\Governorate');
    }

    public function bloodTypes()
    {
        return $this->belongsToMany('App/Models\BloodType');
    }


}