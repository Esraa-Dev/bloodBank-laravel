<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('patient_name', 'patient_phone', 'hospital_name', 'hospital_adress', 'patient_age', 'bags_num', 'longitude', 'details', 'latitude', 'blood_type_id', 'client_id', 'city_id');

    public function bloodType()
    {
        return $this->belongsTo('App/Models\BloodType');
    }

    public function City()
    {
        return $this->belongsTo('City');
    }

    public function client()
    {
        return $this->belongsTo('App/Models\Client');
    }

    public function notifications()
    {
        return $this->hasMany('Notification');
    }

}