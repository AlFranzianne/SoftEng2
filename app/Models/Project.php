<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'status', 'employee_id', 'start_date', 'end_date'];
    public $timestamps = false;

    /**
     * Get the employee associated with the project.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
