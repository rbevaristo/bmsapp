<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employee_id', 'firstname', 'lastname'];

    public function getFullnameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

}
