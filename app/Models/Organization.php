<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     * @var string
     */
    protected $table = "organizations";

    /**
     * @var array
     */
    protected $fillable=[
        'user_id',
        'name',
        'description',
        'contact',
        'email',
        'phone_number'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getUsers()
    {
        return $this->belongsToMany(User::class, 'user_organization', 'user_id', 'organization_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany\
     */
    public function getClient(){
        return $this->hasMany(Client::class);
    }

}
