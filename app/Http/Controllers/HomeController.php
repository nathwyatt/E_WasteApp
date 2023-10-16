<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)

  {  
    

    $user = Auth::user();
    if ($user->hasRole("supervisor"))
     {
        $id = Auth::user()->station->id;
        $blocks = Block::where('supervisor_id',$id);
       
        $dustbin = Dustbin::where('block_id', $blocks); 

        $notifications = auth()->user()->unreadNotifications;


        return view('Backend.dashboard', compact('blocks','dustbin','notifications'));
     }
     else{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
        return view('Backend.dashboard');
    }
}


public function userProfile()
{
    return view ('profile');

}
}