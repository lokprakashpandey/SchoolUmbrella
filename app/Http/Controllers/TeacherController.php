<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User,App\Resource_type,App\Course;
use App\Resource;
use App\Resource_course;
use App\Resource_file;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = User::find(Auth::user()->id);
        $resourceTypes = Resource_type::all();
        $courses = $crs = Course::orderBy('affiliateId', 'DESC')->orderBy('streamId','DESC')->orderBy('levelId','DESC')->get();
        return view('teacher')->with('teacher',$teacher)->with('resourceTypes',$resourceTypes)->with('courses',$courses);
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
        $res = new Resource;
        $res->description = $request['description'];
        $res->teacherId = Auth::user()->id;
        $res->resource_typeId = $request['resource_typeId'];
        $res->save();

        foreach ($request['semesters'] as $key => $value) {
            $rescrs = new Resource_course;
            $rescrs->resourceId = $res->id;
            $rescrs->courseId= $key;
            $rescrs->semesters = $value[0];
            $rescrs->save();
        }   

        $resfile = new Resource_file;
        $resfile->name = $request['name'];
        $resfile->order = $request['order'];
            
        $name = time().".".$request->file('file')->getClientOriginalExtension();
        $dest = base_path()."/public/uploads/resources/";
        $request->file('file')->move($dest,$name);
        $resfile->file = $name;
         
        $resfile->resourceId = $res->id;
        $resfile->save();
        \Session::flash('sucess_message','Resource material is sucessfully stored');
        return redirect('teacher');
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
