<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'houseNumber', 'street', 'barangay', 'city', 'state', 'postalCode'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}
