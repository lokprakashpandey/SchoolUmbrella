<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

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
        $user = new User();
        $user->fname = $request['fname'];
        $user->mname = $request['mname'];
        $user->lname = $request['lname'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->password = bcrypt($request['password']);
        $user->ip = $request->ip();
        $user->user_typeId = $request['usertype'];
        $user->save();
        return $request;
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

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if(Auth::attempt(['username' => $request['username'],'password'=>$request['password']]))
            return redirect(''); //home ko index ma pugauchha
        else
            return "Invalid username or password";
    }
}