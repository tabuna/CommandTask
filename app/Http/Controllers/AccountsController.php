<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests\AccountEdit;
use App\Http\Requests;

class AccountsController extends Controller
{

    protected $user;

    /**
     * AccountsController constructor.
     * @param Guard $guard
     */
    public function __construct(Guard $guard)
    {
        $this->middleware('auth');
        $this->user = $guard->user();
    }

    /**
     * Редактирвоание профиля
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit(){

        return view('accounts.edit',[
            'user' => $this->user
        ]);
    }


    /**
     * Обновление профиля
     * @param AccountEdit $accountEdit
     */
    public function putUpdate(AccountEdit $accountEdit){
        $this->user
            ->fill($accountEdit->all())
            ->save();
    }





}
