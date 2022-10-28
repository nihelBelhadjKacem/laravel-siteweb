<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input= $request->all();
        $this->validate($request,[
        'email' => 'required',
        'password' => 'required',
        'remember_token'=> 'required',
        ]);
        if(auth()->attempt(array('email' => $input['email'], 'password' =>$input ['password'])))
        {
             if (auth()->user()->is_admin == 1)
             {
                return redirect()->route('admin.home');
             }else{ if(auth()->user()->is_admin==2 )

                        return redirect()->route('per.home');
                    else
                       return redirect()->route('Dmrdv1.req');
                 }

        }else{
        return redirect()->route('login')
           ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
