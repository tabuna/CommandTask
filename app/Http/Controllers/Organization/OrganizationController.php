<?php

namespace App\Http\Controllers\Organization;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests\Organization\Organization as OrganizationRequest;


use App\Http\Requests;
use App\Models\Organization;
use App\Http\Controllers\Controller;
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


    /**
     * Организации пользователя
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $organizations = $this->user->getOrganizations()->get();
        return view('accounts.organizations.index', [
            'organizations' => $organizations,
            'user' => $this->user
        ]);
    }


    /**
     * Создание организациии
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('accounts.organizations.create');
    }


    /**
     * Создание организации
     * @param OrganizationRequest $organizationCreate
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrganizationRequest $organizationCreate)
    {
        $this->user->getOrganizations()->create($organizationCreate->all());
        return redirect()->back()->with('success', 'Организация успешно создана');
    }


    /**
     * @param Organization $organization
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Organization $organization)
    {
        if ($organization->user_id == $this->user->id) {
            return view('accounts.organizations.edit', [
                'organization' => $organization,
            ]);
        } else {
            abort(403);
        }
    }


    /**
     * Обновление данных организации
     * @param Organization $organization
     * @param OrganizationRequest $organizationRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Organization $organization, OrganizationRequest $organizationRequest)
    {
        if ($organization->user_id == $this->user->id) {
            $organization->fill($organizationRequest->all())->save();
            return redirect()->back()->with('success', 'Организация успешно изменена');
        } else {
            abort(403);
        }

    }


}
