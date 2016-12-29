<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\users;
use App\leaderboard;


class HomeController extends Controller
{
    public function dashboard()
    {
        if (session()->has('user_id'))
        {
            $name = session('name');
            return view('home')->with(['name'=>$name,'status'=>1]);
        }
        else{
            return view('home')->with(['name'=> NULL, 'status'=>0]);
        }
    }
    public function login()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function callback()
    {
        $user = Socialite::driver('facebook')->user();
        $uid = $user->id;
        $profile = users::where('id',$uid)->first();
        if(empty($profile))
        {
            $newuser = new users;
            $newuser->id = $uid;
            $newuser->email = $user->getEmail();
            $newuser->username = $user->getName();
            $newuser->photo = $user->getAvatar();
            $newuser->save();

            $lentry = new leaderboard();
            $lentry->id = $uid;
            $lentry->email = $user->getEmail();
            $lentry->username = $user->getName();
            $lentry->round_id = intval(1);
            $lentry->save();
        }
        $usercheck = users::where('id',$uid)->first();
        session()->put(['user_id'=>$uid,'name'=>$usercheck['username'],'email'=>$usercheck['email']]);
        return redirect('/');

    }
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
    public function start(){
        $curpos = leaderboard::where('id',session('user_id'))->select('round_id')->first();
        $curpos = $curpos['round_id'];
        return redirect(url('/round/'.$curpos));
    }
}
