<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class formActionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function __invoke(Request $request)
    {

        if ($request->method() == 'POST') {
            $this->validate($request, [
                'name' => 'required | max: 30 | string | ',
                'email' => 'required | email | string | unique:users,email',

            ]);

            $user = User::find(Auth::id(), 'id');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            try {
                $user->save();
            } catch (\Exception $exception) {
                return Redirect::back()->withErrors([
                    'errors' => $exception->getMessage()]);
            }
        } else {
            $user = User::find(Auth::id(), 'id');
        }

        return view('user_update', ['user' => $user]);
    }
}