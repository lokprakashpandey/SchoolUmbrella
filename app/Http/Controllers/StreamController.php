<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Stream;
use App\Affiliate;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stream = Stream::all();
        return view('admin/stream')->with('streams',$stream);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/streamAdd');
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
            $stm = new Stream;
            $stm->name = $request['name'];
            $stm->save();
            \Session::flash('sucess_message','Stream is sucessfully stored.');

        }catch(\Exception $e){
            \Session::flash('error_message','Stream could not created!');
        }

        return redirect('myAdmin/streams');
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
        $stm = Stream::find($id);
        return view('admin.edit_stream')->with('stream',$stm);
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
        $stm = Stream::find($id);
        $stm->name = $request['name'];
        $stm->save();
        \Session::flash('sucess_message','Stream sucessfully updated');
        return redirect('myAdmin/streams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $stm = Stream::find($id);
            $stm->delete();
            \Session::flash('sucess_message','Stream sucessfully DELETED');
        }catch(\Exception $e){
            \Session::flash('error_message','Stream could not DELETED');
        }
        return redirect('myAdmin/streams');
    }
}
