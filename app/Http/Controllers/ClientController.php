<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Client\ClientRequest;
use App\Models\Client;
use Auth;

class ClientController extends Controller
{
    //
    /**
     * @var
     */
    public $user;

    /**
     * ClientController constructor.
     * @param Guard $guard
     */

    public function __construct(Guard $guard)
    {
        $this->middleware('auth');
        $this->user = $guard->user();
    }


    public function getIndex()
    {
        /*$organizations = $this->user->getOrganizations()->get();
        return view('accounts.organizations.organization', [
            'organizations' => $organizations,
            'user' => $this->user
        ]);*/
    }

    public function getCreate(){
        return view('client.create');
    }


    public function postStore(ClientRequest $clientCreate){
        $this->user->getClient()->create($clientCreate->all());
        return redirect()->back()->with('success', 'Клиент успешно добавлен');
    }
}
