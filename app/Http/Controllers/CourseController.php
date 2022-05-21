<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Response;


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
      $courses=Course::paginate(5);
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
        
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'description'=>'required',
            'seat'=>['required','digits_between:2,20'],
            'time'=>'required',
            'fee'=>'required'
        ],
    [
        'name.required'=>'Please fill the name'
    ]);
        $course=Course::create([
            'name' => $request['name'],
            'age' => $request['age'],
            'description' => $request['description'],
            'seat' => $request['seat'],
            'time' => $request['time'],
            'fee' => $request['fee'],
        ]);

        return response()->json($course); //Response::json($course)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        //$course=Course::find($id);
       return view('courses.show')->with('course',$course);
    
    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit')->with('course',$course);
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
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'description'=>'required',
            'seat'=>['required','digits_between:2,20'],
            'time'=>'required',
            'fee'=>'required'
        ],
    [
        'name.required'=>'Please fill the name'
    ]);
    $course=Course::find($id);
    $course->name=$request->name;
    $course->description=$request->description;
    $course->age=$request->age;
    $course->seat=$request->seat;
    $course->time=$request->time;
    $course->fee=$request->fee;
    $course->save();
    return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return redirect()->route('courses.index');
    }
}
