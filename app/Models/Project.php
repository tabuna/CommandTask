<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Project extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'client_id',
        'name',
        'description',
        'production',
        'stage',
        'dev',
        'github',
        'organization_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function credentials()
    {
        return $this->hasMany(Credential::class, 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(User::class);
    }



    /**
     * Checks if teh currently Auth user
     * is the owner of the project.
     *
     * @return bool
     */
    public function isOwner()
    {
        if ($this->user_id != Auth::id()) {
            return false;
        }

        return true;
    }

    /**
     * Checks if the current Auth user
     * is a member of a given project.
     *
     * @return bool
     */
    public function isMember()
    {

        $s = DB::table('project_user')->whereProjectId($this->id)->whereUserId(Auth::id())->get();
        if (count($s) == 0) {
            return false;
        }

        return true;
    }

    public function totalWeight()
    {
        return $this->tasks()->where('state', '!=', 'complete')->sum('weight');
    }

    // Get the toal weight of the given project

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id');
    }
}