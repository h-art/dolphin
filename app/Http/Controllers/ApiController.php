<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required',
        ]);

        $email = Input::get('email');
        $name = Input::get('name');

        return 'ok';
    }

}
