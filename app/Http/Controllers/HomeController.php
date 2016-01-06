<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_profile;
use Auth; // Auth class is in root location

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $user= new User;
        $user->username = $request['username'];
        $user->email = $request['email']; 
        $user->password = bcrypt($request['password']);
        $user->ip= $request->ip();
        $user->user_typeId= $request['user_typeId'];
        $user->save();
        
        if($user->user_typeId == 5){
            $org_profile =new Organization_profile;
            $org_profile->name = $request[''];
            $org_profile->address = $request[''];
            $org_profile->description = $request[''];
            $org_profile->bochure = $request[''];
        }
        else{
            $user_profile = new User_profile;
            $user_profile->userId = $user->id;
            $user_profile->fname = $request['fname'];
            $user_profile->mname = $request['mname'];
            $user_profile->lname = $request['lname'];
            $user_profile->gender = $request['gender'];
            $user_profile->save();
        }
        return redirect('');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        // Auth::attempt() is used for authenticating; attempt()is method of class Auth
        if(Auth::attempt(['username'=>$request['username'], 'password'=>$request['password']])){
            //return Auth::user(); // Auth::user() where user() is built-in methode

            if (Auth::user()->user_typeId == 1)
                return redirect('myAdmin'); //Redirects into Admin Route


            if(Auth::user()->user_typeId == 5){
                return redirect('organization'); //Redirect into  organization route
            }
            return redirect(''); // Redirects into index page/Route
        }
        else{
            \Session::flash('error_message','Invalid Username and/or Password');
            return redirect('login');
        }
    }


    public function admin(){
        return view('admin'); //Returns view blade admin.blade.php
    }


}
