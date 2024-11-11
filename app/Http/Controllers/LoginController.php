<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver("google")->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $googleUser = Socialite::driver("google")->stateless()->user();

            $user = User::where("email",$googleUser->getEmail())->first();

            if($user){
                Auth::login($user);
            }
            else{
                $user = User::create([
                    "name" => $googleUser->getName(),
                    "email" => $googleUser->getEmail(),
                    "password" => "123456",

                ]);
                Auth::login($user);
                return redirect()->intended("/");
            }
        }
        catch(\Exception $e){

            return redirect()->route("login")->with("error","Please try again later");

        }
    }
       
}
