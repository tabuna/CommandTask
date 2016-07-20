<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Image;
use Storage;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'about',
        'phone',
        'sex',
        'notification',
        'nickname',
        'website',
        'avatar',
    ];


    /**
     * Мутация данных
     * @var array
     */
    protected $casts = [
        'sex' => 'boolean',
        'notification' => 'boolean',
        'about' => 'string',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * @param $avatar
     * @return string
     */
    public function getAvatarAttribute($avatar)
    {
        return '/image' . $this->attributes['avatar'];
    }


    /**
     * @param $avatar
     */
    public function setAvatarAttribute($avatar)
    {
        Storage::disk('public')->makeDirectory(date("Y/m/d"));
        $name = '/' . date("Y/m/d") . '/' . hash('crc32b', time()) . '.' . $avatar->getClientOriginalExtension();
        $path = storage_path('app/public/' . $name);
        Image::make($avatar)->resize(300, 200)->save($path, 75);
        $this->attributes['avatar'] = $name;
        if (isset($this->original['avatar']) &&
            !empty($this->original['avatar'])
        ) {
            Storage::disk('public')->delete($this->original['avatar']);
        }
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients()
    {
        return $this->hasMany(Client::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function inProjects()
    {
        return $this->belongsToMany(Project::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getOrganizations()
    {
        return $this->belongsToMany(Organization::class, 'user_organization', 'user_id', 'organization_id');
    }


}