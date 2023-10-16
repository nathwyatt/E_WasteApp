<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Dustbin;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use App\Models\Block;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $numusers =User::get()->count(); 
        $numdustbins =Dustbin::get()->count();
        $numblocks =Block::get()->count();
        $numroles =DB::table('roles')->count();

     $datas=Data::latest()->paginate(5);
    
        return view('Backend.dashboard', compact('numusers','numroles','numblocks','numdustbins','datas'));
    }
}
