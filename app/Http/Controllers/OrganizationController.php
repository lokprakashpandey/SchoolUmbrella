<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Organization;
use Auth;
class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = Organization::where('userId',Auth::user()->id)->first();
        return view('organization.index')->with('organization',$organization);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $organization = Organization::where('userId',Auth::user()->id)->first();
        return view('organization.edit')->with('organization',$organization);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

           if($organization = Organization::where('userId',Auth::user()->id)->first()) {}
           else {
            $organization = new Organization;
            $organization->userId = Auth::user()->id;
            }
           if($request['brochure']){
                $filepath = base_path()."/public/uploads/".$organization->brochure;
                is_file($filepath)? file_exists($filepath)? unlink($filepath): " ": " ";
                $name = time().".".$request->file('brochure')->getClientOriginalExtension();
                $dest = base_path()."/public/uploads";
                $request->file('brochure')->move($dest,$name);
                $organization->brochure = $name;
           }
           
           $organization->name = $request['name'];
           $organization->address = $request['address'];
           $organization->description = $request['description'];
           $organization->save();
           \Session::flash('success_message','Your record has been updated');
           return redirect('organization/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
