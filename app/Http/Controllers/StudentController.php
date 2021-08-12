<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\CourseAssoc;
use DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = Student::orderBy('id','desc')->get();
        $courses = Course::get();
        
        if ($request->ajax()) {
            return Datatables::of($students)
                
                ->addColumn('student', function($student){

                    return $student->name;
                })
                ->addColumn('course', function($course){

                        return count($course->courses);
                })
                ->addColumn('action', function($action){

                        $edit = '<a href="#" id="'.$action->id.'" title="Edit Student" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                        $del = '<a href="'.route('del_student',['id' => $action->id]).'" class="btn btn-danger" title="Delete Student"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                        return $edit.' '.$del;
                })
                ->rawColumns(['student', 'course', 'action'])
                ->make(true);     
        }
        return view('student.index',['courses' => $courses]);
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
        $this->validate($request,[
            'firstName' => 'required|string|max:250',
            'lastName' => 'required|string|max:250',
            'course' => 'required|numeric'
        ]);

        $student = Student::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName
        ]);

        CourseAssoc::create([
            'course_id' => $request->course,
            'student_id' => $student->id
        ]);

        return redirect()->back()->with('success','Student Added');
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
        Student::where('id',$id)->delete();
        return redirect()->back()->with('success','Student Deleted');
    }
}
