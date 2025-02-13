<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class authController extends Controller
{
    function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credientials = array(
            'email' => $request->email,
            'password' => $request->password
        );
        $remember = $request->has('remember');

        $login = Auth::attempt($credientials,$remember);

        if(!$login){
            return redirect()->route('loginPage')->with('error','Invalid login Email or Password');
        }

        $data = Auth::user();

        if($data->roll == '1'){//admin
            return redirect()->route('admin.index');
        }
        else if($data->roll == '0'){ //user
            return redirect()->route('user.index');
        }
        else{
            return redirect()->route('loginPage')->with('error','Invalid login credientials');
        }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('loginPage');
    }

    function registration(Request $request){
        $request->validate([
            'name' =>     ['required', 'min:3'],
            'mobile' =>   ['required', 'min:10','unique:users,mobile'],
            'email' =>    ['required', 'email','unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required',],
            'terms' =>    ['required', 'accepted'],
        ],
        [
            'mobile.unique' => 'The mobile number address is already registered.',
            'email.unique' => 'The email address is already registered.',
        ]);
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = $request->password;
        $data->save();

        return redirect()->route('user.index');
    }
    function google(){
        return Socialite::driver('google')->redirect();

    }
    function googleData(){
        $data = Socialite::driver('google')->user();

        $user = User::where('google_id', $data->id)->first();
        if($user){
            Auth::login($user);
            return redirect()->route('user.index');
        }
        else{
            // image 
            $imageUrl = $data->avatar;
            $imageName = time().rand() . '.jpg';
            $imagePath = public_path('user/images/users/'.$imageName);
            $imageContent = Http::get($imageUrl)->body();
            file_put_contents($imagePath, $imageContent);
            

            // store in db
            $newUser = new User;
            $newUser->name = $data->name;
            $newUser->email = $data->email;
            $newUser->image = 'user/images/users/' . $imageName;
            $newUser->google_id = $data->id; // Store the Google ID
            $newUser->password = bcrypt('123@321'); // Securely generate a random password
            $newUser->save();


            // login
            Auth::login($newUser);
            return redirect()->route('user.index');
        }
    }
}
