<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(3);
        return view('cari-materi', compact('courses'));
    }

    public function detail_materi(Request $request){
        $courseID = $request->input('id');
        $course = Course::find($courseID);

        if (!$course) {
            return redirect()->back()->with('error', 'Materi tidak ditemukan.');
        }
        
        return view('detail-materi', compact('course'));
    }  

    public function search(Request $request)
    {
        $courses = Course::where("nama","LIKE","%$request->search%")->paginate(6);

        return view('cari-materi',compact("courses"));
    }

}
