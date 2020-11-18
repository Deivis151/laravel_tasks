<?php

namespace App\Http\Controllers;

use App\Models\Statuse;
use Illuminate\Http\Request;
use Auth;
use Validator;

class StatuseController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = statuse::all();
       return view('statuse.index', ['statuses' => $statuses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statuse.create')->with('success_message', 'Sekmingai sukurtas.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'statuse_name' => ['required', 'min:3', 'max:49'],
            
            
        ],

        [ 'statuse_name.required' => 'Laukelis negali buti tuscias!',
        'statuse_name.min' => 'vardas  per trumpas!',
        'statuse_name.max' => 'Patiekalo pavadinimas per ilgas!',
            ]
        );
    
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);

            }

        $statuse = new Statuse;
        $statuse->name = $request->statuse_name;
        $statuse->save();
        return redirect()->route('statuse.index')->with('success_message', 'Sekmingai įrašytas.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statuse  $statuse
     * @return \Illuminate\Http\Response
     */
    public function show(Statuse $statuse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statuse  $statuse
     * @return \Illuminate\Http\Response
     */
    public function edit(Statuse $statuse)
    {
        return view('statuse.edit', ['statuse' => $statuse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statuse  $statuse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statuse $statuse)
    {
        $statuse->name = $request->statuse_name;
        $statuse->save();
        return redirect()->route('statuse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statuse  $statuse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statuse $statuse)
    {
        $statuse->delete();
        return redirect()->route('statuse.index')->with('success_message', 'Sekmingai ištrintas.');


        if($task->statuseTasks->count()){
            return 'Trinti negalima, nes turi ';
        
 
    }
}

}