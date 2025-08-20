<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function headedDepartments()
    {
        return $this->hasMany(Department::class, 'head_of_department_id');
    }
}
