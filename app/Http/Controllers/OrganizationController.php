<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;


class OrganizationController extends Controller
{
    /**
     * @var \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public $user;

    /**
     * OrganizationController constructor.
     */
    public function __construct(Guard $guard)
    {
        $this->middleware('auth');
        $this->user = $guard->user();
    }


    public function getIndex()
    {
        $organizations = $this->user->getOrganizations()->get();
        return view('accounts.organizations', [
            'organizations' => $organizations
        ]);
    }
}
