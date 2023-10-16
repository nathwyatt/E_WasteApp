<?php

namespace App\Http\Controllers;
use App\Models\Block;
use App\Models\User;
use App\Models\Data;
use App\Models\Dustbin;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
       // $blocks = Block::orderBy('id','desc')->paginate(5);
        $blocks = Block::join('users', 'users.id', '=', 'blocks.User_id')
                       ->paginate(5);

        //dd($bloc);
        return view('blocks.index', compact('blocks'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $usersupervisor = User::orderBy('name','desc')->get();
        //dd($usersupervisor);
        return view('blocks.create', compact('usersupervisor'));
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
            'block_name' => 'required',
            'User_id' => 'required',
            
        ]);
        
        Block::create($request->post());

        return redirect()->route('blocks.index')->with('success','Block has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\block  $block
    * @return \Illuminate\Http\Response
    */
    public function show( $block_id)
    {

        $block = Block::where('blocks.block_id', '=', $block_id)->get();
        return view('blocks.show',compact('block'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Block  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Block $block)
    {
        $block = Block::find($block_id);
        return view('blocks.edit',compact('block'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\block  $block
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Block $block)
    {
        $request->validate([
            'block_name' => 'required',
            'User_id' => 'required',
            
        ]);
        
        $block->fill($request->post())->save();

        return redirect()->route('blocks.index')->with('success','Block Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Block  $block
    * @return \Illuminate\Http\Response
    */
    public function destroy(Block $block)
    {
        $block->delete();
        return redirect()->route('blocks.index')->with('success','Block has been deleted successfully');
    }
}