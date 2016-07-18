<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{

    /**
     * @var string
     */
    protected $table = 'clients';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'point_of_contact',
        'email'
    ];

    /**
     * Return the related projects for a given client
     */
    public function projects()
    {
        return $this->hasMany('App\Project', 'client_id');
    }
}