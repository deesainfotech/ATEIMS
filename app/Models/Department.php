<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_code',
        'department_name',
        'institution_id',
        'hod',
        'description',
        'status',
    ];

    /**
     * A department belongs to an institution.
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}