<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Affiliate;
use App\Country;

class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aff = Affiliate::all();
        return view('admin/affiliate')->with('affiliates',$aff);
        // admin/affiliate; here affiliate is view name, 
        // where as ('affiliate',$aff); affiliate is alise for $aff.i.e, affiliates vararable should be catched in view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cnt = Country::all();
        return view('admin/affiliateAdd')->with('countries',$cnt);
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
            $aff = new Affiliate;
            $aff->name = $request['name'];
            $aff->description = $request['description'];
            $aff->countryId = $request['countryId'];
            $aff->save();
            \Session::flash('sucess_message','Affiliate is sucessfully stored.');
        }catch(\Exception $e){
            \Session::flash('error_message','Affiliate could not created!');
        }
        
        return redirect('myAdmin/affiliates');
        
        
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
        $aff = Affiliate::find($id);
        $cnt = Country::all();
        return view('admin.edit_affiliate')->with('affiliate',$aff)->with('countries',$cnt);
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
        $aff = Affiliate::find($id);
        $aff->name = $request['name'];
        $aff->description = $request['description'];
        $aff->countryId = $request['countryId'];
        $aff->save();
        \Session::flash('sucess_message','Sucessfully Updated');
        return redirect('myAdmin/affiliates');
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
            $aff = Affiliate::find($id);
            $aff->delete();
            \Session::flash('sucess_message','Sucessfully Deleted');
        }catch(\Exception $e){
            \Session::flash('error_message','Affiliates already deleted!');
        }
        return redirect('myAdmin/affiliates');
    }
}
