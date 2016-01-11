<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Resource_type;

class ResourceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $resourceTypes = Resource_type::all();
       return view('admin/resource_type')->with('resourceTypes',$resourceTypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/resourceTypeAdd');
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
            $rsType = new Resource_type;
            $rsType->name = $request['name'];
            $rsType->save();
            \Session::flash('sucess_message','ResourceType is created Sucessfully!');
        }catch(\Exception $e){
            \Session::flash('error_message','Oops !! ResourceType is not created.');
        }

        return redirect('myAdmin/resourceTypes');
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
        $rsType = Resource_type::find($id);
        return view('admin/edit_resourceType')->with('resourceType',$rsType);
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
        $rsType = Resource_type::find($id);
        $rsType->name = $request['rname'];
        $rsType->save();
        return redirect('myAdmin/resourceTypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rsType = Resource_type::find($id);
        $rsType->delete();
        return redirect('myAdmin/resourceTypes');
    }
}
