<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function headOfDepartment()
    {
        return $this->belongsTo(Teacher::class, 'head_of_department_id');
    }
}
