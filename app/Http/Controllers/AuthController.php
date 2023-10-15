<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {   
         if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('enduser.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $inputVal = $request->all();
   
        $this->validate($request, [
            'signInEmail' => 'required|email',
            'signInPassword' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $inputVal['signInEmail'], 'password' => $inputVal['signInPassword']))){
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email & Password are incorrect.');
        }     
    }

    public function actionlogout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

    public function indexregist()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('enduser.register', compact('catalogues'));
        }

        return view('enduser.register');
    }

    public function actionregist(Request $request)
    {
        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'city' => 'required',
            'phone-number' => 'required',
            'email-address' => 'required',
            'password' => 'required',
            'confirm-password' => 'required',
        ]);

        // Buat pengguna baru
        $user = new User();
        $user->first_name = $request->input('first-name');
        $user->last_name = $request->input('last-name');
        $user->city = $request->input('city');
        $user->phone_number = $request->input('phone-number');
        $user->email = $request->input('email-address');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Autentikasi pengguna baru
        Auth::login($user);

        // Pesan flash untuk sukses pendaftaran
        session()->flash('success', 'Registration successful! Welcome to our platform.');

        // Redirect ke area yang sesuai (misalnya, dashboard)
        return redirect('/');
    }
}
