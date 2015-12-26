<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Level;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $level = Level::all();
        return view('admin/level')->with('levels',$level);
        // admin/level; here level is view name, 
        // where as ('level',$level); level is alise for $level.i.e; 
        // level vararable should be catched in view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/levelAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $level = new Level;
            $level->name = $request['name'];
            $level->save(); 
            \Session::flash('sucess_message','Level is created Sucessfully!');   
        }catch(\Exception $e){ 
            \Session::flash('error_message','Oops !! Level is not created.');
        }
        
        return redirect('myAdmin/levels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lvl = Level::find($id);
        return view('admin.edit_level')->with('level',$lvl);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lv = Level::find($id);
        $lv->name= $request['name'];
        $lv->save();
        \Session::flash('sucess_message','Sucessfully Updated');
        return redirect('myAdmin/levels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $lv = Level::find($id);
            $lv->delete();
            \Session::flash('sucess_message','Level is sucessfully DELETED.');
        } catch (Exception $e) {
            \Session::flash('error_message','Oops!! Level could not DELETED.');
        }
        
        return redirect('myAdmin/levels');

    }
}
