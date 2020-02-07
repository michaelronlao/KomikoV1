<?php


namespace App\Http\Controllers;

use App\Http\Middleware\EncryptCookies;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Image;


class MyProfileController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('/myprofile', array('user'=>Auth::user()));
    }



    public function profile(){
        return view('myprofile', array('user' => Auth::user()) );
    }

    public function update(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('myprofile',  array('user' => Auth::user()));

    }

    //public function edit()
    //{
    //if(Auth::user()) {
    //     $user = User::find(Auth::user()->id);

    //     if ($user) {
    //         return view('/myprofile')->withuser($user);
    //     } else {
    //         return redirect()->back();
    //    }
    //}else {
    //    return redirect()->back();
    //}
    //}
}