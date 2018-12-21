<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'slug', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullnameAttribute()
    {
        return $this->firstname .' '. $this->lastname;
    }
    

    public function getFirstnameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastnameAttribute($value)
    {
        return ucfirst($value);
    }

    public function scopeIsNotAdmin($query)
    {
        return $query->where('id', '<>', 1);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

}
