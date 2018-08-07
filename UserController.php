<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard()
    {
        return view('dashboard');
    }
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'surname' => 'required|max:120',
            'password' => 'required|min:4'
        ]);
        
        $fname = $request['first_name'];
        $sname = $request['surname'];
        $email = $request['email'];
        $pass = bcrypt($request['password']);
        
        $user = new User();
        $user->fname = $fname;
        $user->sname = $sname;
        $user->email = $email;
        $user->password = $pass;
        
        $user->save();
        
        return redirect()->route('dashboard');
    }
    
    public function postSignIn(Request $request)
    {
       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}