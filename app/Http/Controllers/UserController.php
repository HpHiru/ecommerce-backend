<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function register( Request $request ){
        echo "<pre></pre>";print_r($request->input(''));
        exit;
        if(!empty($request->input())){
            $user = User::create([
                'name' => $request->name(),
                'email' => $request->email(),
                'password' => Hash::make($request->password()),
            ]);

            return $user;
        }
       
    }
}
