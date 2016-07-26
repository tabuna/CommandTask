<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests\Organizations\OrganizationCreate;
use App\Http\Requests;
use App\Models\Organization;
use Auth;

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
        return view('accounts.organizations.organization', [
            'organizations' => $organizations,
            'user' => $this->user
        ]);
    }


    /**
     *
     */
    public function getCreate(){
        return view('accounts.organizations.create');
    }


    public function postStore(OrganizationCreate $organizationCreate){
        $this->user->getOrganizations()->create($organizationCreate->all());
        return redirect()->back()->with('success', 'Организация успешно создана');
    }



}
