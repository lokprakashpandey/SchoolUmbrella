<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // // $admin = Admin::where('userId',Auth::user()->id)->first();
        // // return view('admin')->with('admin',$admin);
        // return view('admin::login');

        if(Auth::check() && Auth::user()->user_typeId == 1) {
            return redirect('myAdmin');
        }
        else{
            return view('admin.login');
        }
        
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
    public function edit($id)
    {
        //
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
        //
    }


    public function login(Request $request) 
    {
        //return $request['username'];
    if(Auth::attempt(['username'=>$request['username'], 'password'=>$request['password']]) && Auth::user()->user_typeId == 1)
        return redirect('myAdmin');  
    else 
        {
            \Session::flash('error_message','Invalid credentials!');
            return redirect('');
        }        
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
    public function home(){

            $admin = User::find(Auth::user()->id);
            return view('admin.home')->with('admin',$admin); 

    }
}
