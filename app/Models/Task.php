<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'weight',
        'user_id',
        'project_id',
        'state',
        'priority',
        'description'
    ];

    /**
     * Relationship to project
     */
    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
