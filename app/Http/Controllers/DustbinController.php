<?php

namespace App\Http\Controllers;
use App\Models\Dustbin;
use App\Models\Block;
use Illuminate\Http\Request;

class DustbinController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // $dustbins = Dustbin::orderBy('id','desc')->paginate(5);
        $dustbins = Dustbin::join('blocks', 'blocks.block_id', '=', 'dustbins.Block_id')
        ->paginate(5);
        //dd($dustbins);
        return view('dustbins.index', compact('dustbins'));
        // $blocks = Dustbin::find(1)->blocks;
  
        // dd($blocks);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $blocksupervisor = Block::orderBy('block_name','desc')->get();
        
        return view('dustbins.create', compact('blocksupervisor'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'block_name'=>'required',
            'Type' => 'required',

        ]);
        
        Dustbin::create($request->post());

        return redirect()->route('dustbins.index')->with('success','Dustbin has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Dustbin  $dustbin
    * @return \Illuminate\Http\Response
    */
    public function show($Dustbin_id)
    {
        //dd($Dustbin_id);
        $dustbin = Dustbin::where('dustbins.Dustbin_id', '=', $Dustbin_id)->get();

        //dd($dustbin);
        return view('dustbins.show',compact('dustbin'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Dustbin  $dustbin
    * @return \Illuminate\Http\Response
    */
    public function edit($Dustbin_id)
    {
        $dustbin = Dustbin::where('dustbins.Dustbin_id', '=', $Dustbin_id)->get();
        $blocks = Block::pluck('block_name','block_name')->all();
        $dustbinblock = $dustbin->blocks->pluck('block_name','block_name')->all();
    
        return view('dustbins.edit',compact('dustbin','blocks','dustbinblock'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\dustbin  $dustbin

    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Dustbin $dustbin)
    {
        $request->validate([
            'block_name'=>'required',
            'Type' => 'required',
        
        ]);
        
        $dustbin->fill($request->post())->save();

        return redirect()->route('dustbins.index')->with('success','Dustbin Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Dustbin  $dustbin
    * @return \Illuminate\Http\Response
    */
    public function destroy($Dustbin_id)
    {
      Dustbin::where('dustbins.Dustbin_id', '=', $Dustbin_id)->delete();
        return redirect()->route('dustbins.index')->with('success','Dustbin has been deleted successfully');
    }
}