<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $fname = $request['fname'];
        $sname = $request['sname'];
        $email = $request['email'];
        $pass = bcrypt($request['password']);
        
        $user = new User();
        $user->fname = $fname;
        $user->sname = $sname;
        $user->email = $email;
        $user->password = $pass;
        
        $user->save();
        
        return redirect()->back();
    }
    
    public function postSignIn(Request $request)
    {
        
    }
}