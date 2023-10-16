<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\Dustbin;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $datas = Data::latest()->paginate(5);
    
        return view('datas.index', compact('datas'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
 

    /**
    * Display the specified resource.
    *
    * @param  \App\data  $data
    * @return \Illuminate\Http\Response
    */
    public function show( $Data_id)
    {
        $data = Data::where('data.Data_id', '=', $Data_id)->get();
       
        // $datasupervisor = Block::orderBy('block_name','desc')->get();
        return view('datas.show',compact('data'));
    }
    

    /**
    * Show the form for editing the specified resource.
    *
    *
    */
   

    /**
    * Update the specified resource in storage.
   
    */
    // public function update(Request $request, Data $data)
    // {
    //     $request->validate([
    //         'Dustbin_id' => 'required',
    //         'Block_id' => 'required',
    //         'Block_supervisor' => 'required',
    //         'Status' => 'required',
    //     ]);
        
    //     $data->fill($request->post())->save();

    //     return redirect()->route('datas.index')->with('success','data Has Been updated successfully');
    // }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Data  $data
    * @return \Illuminate\Http\Response
    */
    public function destroy( $Data)
    {
        Dustbin::where('datas.Data_id', '=', $Data_id)->get();
        return redirect()->route('datas.index')->with('success','Data has been deleted successfully');
    }
}
