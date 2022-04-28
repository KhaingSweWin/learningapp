<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $courses=Course::all(); // get all data from courses table
        //print($courses);
       // $courses=Course::where('seat','>',10)->where('seat','<',20)->get();
       //$courses=Course::where('name','LIKE','%Language%')->get();
       //$courses=Course::whereIn('seat',[10,20,30])->get();
      // $courses=Course::latest()->get();
      // $courses=Course::orderBy('seat','desc')->get();
     // $courses=Course::find(3);
     // $courses->name="Japaneses Language Class";
     // $courses->save();

     // $courses->delete();
      $courses=Course::all();
     // print($courses->name);
      // print($courses);
       
      
        return view('courses.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'description'=>'required',
                'age'=>'required',
                'seat'=>'required',
                'fee'=>'required',
                'time'=>'required',
            ],
            [
                'name.required'=>'Please fill the name'
            ]
            );
        //
        //Course::create($request->all());
        $course=new Course();
        $course->name=$request->name;
        $course->description=$request->description;
        $course->age=$request->age;
        $course->seat=$request->seat;
        $course->fee=$request->fee;
        $course->time=$request->time;
        $course->save();
        return redirect()->route('courses.index');
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
