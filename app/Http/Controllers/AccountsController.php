<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests\AccountEdit;
use App\Http\Requests;
use Session;

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return $this->getEdit();
    }



    /**
     * Редактирвоание профиля
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit()
    {

        return view('accounts.edit', [
            'user' => $this->user
        ]);

    }


    /**
     * Обновление профиля
     * @param AccountEdit $accountEdit
     */
    public function putUpdate(AccountEdit $accountEdit)
    {
        $avatar = $this->user->avatar;
        if ($accountEdit->hasFile('avatar')) {
            $avatar = '/' . $accountEdit->file('avatar')->move('upload/' . date("Ym") . '/', time() . '.' . $accountEdit->file('avatar')->getClientOriginalExtension())->getPathName();
        }

        $this->user
            ->fill($accountEdit->all());
        $this->user->avatar = $avatar;
        $this->user->save();
        return redirect()->back()->with('success', 'Изменения успешно сохранены');
    }


    /**
     * Смена пароля пользователя
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPassword()
    {
        return view('accounts.password', [
            'user' => $this->user
        ]);
    }

    /**
     * Обновление пароля пользователя
     * @param AccountEdit $accountEdit
     * @return \Illuminate\Http\RedirectResponse
     */
    public function putPassword(AccountEdit $accountEdit)
    {
        $user = $this->user;
        $user->password = bcrypt($accountEdit->password);
        $user->save();
        return redirect()->back()->with('success', 'Вы успешно сменили пароль');
    }


}
