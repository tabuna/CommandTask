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



}
