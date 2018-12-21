<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['slug', 'title', 'description', 'start_date', 'due_date', 'completed_date'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
