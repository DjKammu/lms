<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class CourseController extends Controller
{
    public function index(Request $request)
	{
		$courses = Course::where('published',Course::PUBLISHED)->paginate(Course::PER_PAGE);

	    return view('courses',compact('courses'));
	}
}
