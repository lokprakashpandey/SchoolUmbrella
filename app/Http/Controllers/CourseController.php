<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;
use App\Stream;
use App\Level;
use App\Affiliate;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        return view('admin/course')->with('courses',$course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stm = Stream::all();
        $lvl = Level::all();
        $aff = Affiliate::all();
        return view('admin/courseAdd')->with('streams',$stm)->with('levels',$lvl)->with('affiliates',$aff);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crs = new Course;
        $crs->name = $request['name'];
        $crs->affiliateId = $request['affiliateId'];
        $crs->streamId = $request['streamId'];
        $crs->levelId = $request['levelId'];
        $crs->courseType = $request['courseType'];
        $crs->duration = $request['duration'];
        $crs->save();
        \Session::flash('sucess_message','Course is sucessfully created.');
        return redirect('myAdmin/courses');

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
        $crs = Course::find($id);
        $aff = Affiliate::all();
        $stm = Stream::all();
        $lvl = Level::all();
        return view('admin/edit_course')->with('course',$crs)->with('affiliates',$aff)->with('streams',$stm)->with('levels',$lvl);
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
        $crs = Course::find($id);
        $crs->name = $request['name'];
        $crs->affiliateId = $request['affiliateId'];
        $crs->streamId = $request['streamId'];
        $crs->levelId = $request['levelId'];
        $crs->courseType = $request['courseType'];
        $crs->duration = $request['duration'];
        $crs->save();
        \Session::flash('sucess_message','Course is sucessfully UPDATED.');
        return redirect('myAdmin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crs = Course::find($id);
        $crs->delete();
        \Session::flash('sucess_message','Course deleted sucessfully');
        return redirect('myAdmin/courses');
    }
}
