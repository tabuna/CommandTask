<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Service\ImageUpload\ImageUpload;

class User extends Authenticatable
{
    protected $table = 'users';

    use ImageUpload;
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
     * @return string
     */
    public function getAvatarAttribute()
    {
        return $this->getImageLoad();
    }


    /**
     * @param $avatar
     */
    public function setAvatarAttribute($avatar)
    {
         return $this->setImageLoad($avatar, [
            'width' => '128',
            'height' => '128',
            'quality' => '75'
        ]);

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


    public function getClient(){
        return $this->hasMany(Client::class);
    }




}