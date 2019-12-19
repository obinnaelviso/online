<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\StudentCourse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index() {
    	$user = Auth::user();
    	return view('dashboard.student-dashboard', compact('user'));
    }

    public function profile() {
    	$user = Auth::user();
    	return view('dashboard.student-profile', compact('user'));
    }

    public function editProfile() {
    	$user = Auth::user();
    	$lecturers = User::where('usertype', 1)->get();
    	return view('dashboard.student-profile-edit', compact('user', 'lecturers'));
    }

    public function courses() {
    	$user = Auth::user();
    	$courses = $user->studentCourses;
    	return view('dashboard.student-profile-courses', compact('user', 'courses'));
    }

    public function coursesAdd(Request $request) {
    	$user = Auth::user();
    	$this->courseValidator($request->all())->validate();
    	$student_course = new StudentCourse;
    	$student_course->course = $request->course;
    	$student_course->semester1 = $request->semester1;
    	$student_course->semester2 = $request->semester2;
    	$user->studentCourses()->save($student_course);
    	return redirect()->route('student.profile.courses')->with('success', 'Course Registered Successfully!!!');
    }

    public function courseEdit(StudentCourse $course, Request $request) {
    	$user = Auth::user();
    	$course->course = $request->course;
    	$course->semester1 = $request->semester1;
    	$course->semester2 = $request->semester2;
    	$course->save();
    	return redirect()->route('student.profile.courses')->with('success', 'Course Editted Successfully!!!');
    }

    // Upload documents
    public function documents() {
    	$user = Auth::user();
    	return view('dashboard.student-profile-documents', compact('user'));
    }

    public function upload(Request $request) {
    	$user = Auth::user();
    	$student_info = Auth::user()->student_info;
    	// Resume
    	if($request->hasFile('resume')) {
		    $resume_name = $request->file('resume')->getClientOriginalName();
		    $file_url = $request->file('resume')->storeAs('/public/uploads/documents', $resume_name);
		    $resume_url = str_replace("public/", "", $file_url);
		    $student_info->resume_url = $file_url;
		    $student_info->save();
		    session()->flash('success', 'File Uploaded Successfully!!!');
		  }

		  // Portfolio
		  if($request->hasFile('portfolio')) {
		    $portfolio_name = $request->file('portfolio')->getClientOriginalName();
		    $file_url = $request->file('portfolio')->storeAs('/public/uploads/documents', $portfolio_name);
		    $portfolio_url = str_replace("public/", "", $file_url);
		    $student_info->e_portfolio_url = $file_url;
		    $student_info->save();
		    session()->flash('success', 'File Uploaded Successfully!!!');
		  }

		  // Publication 1
		  if($request->hasFile('publication1')) {
		    $publication1_name = $request->file('publication1')->getClientOriginalName();
		    $file_url = $request->file('publication1')->storeAs('/public/uploads/documents', $publication1_name);
		    $publication1_url = str_replace("public/", "", $file_url);
		    $student_info->publication1_url = $file_url;
		    $student_info->save();
		    session()->flash('success', 'File Uploaded Successfully!!!');
		  }

		  // Publication 2
		  if($request->hasFile('publication2')) {
		    $publication2_name = $request->file('publication2')->getClientOriginalName();
		    $file_url = $request->file('publication2')->storeAs('/public/uploads/documents', $publication2_name);
		    $resume_url = str_replace("public/", "", $file_url);
		    $student_info->publication2_url = $file_url;
		    $student_info->save();
		    session()->flash('success', 'File Uploaded Successfully!!!');
		  }
    	return redirect()->route('student.profile.documents');
    }

    public function removeResume(Request $request) {
    	$user = Auth::user();
    	$student_info = $user->student_info;

    	if($student_info->resume_url) {
    		Storage::delete($user->student_info->resume_url);
    		$student_info->resume_url = null;
    		$student_info->save();
    	}
    	return redirect()->route('student.profile.documents')->with('success', 'Resume removed successfully!');
    }

    public function removePortfolio(Request $request) {
    	$user = Auth::user();
    	$student_info = $user->student_info;

    	if($student_info->e_portfolio_url) {
    		Storage::delete($user->student_info->e_portfolio_url);
    		$student_info->e_portfolio_url = null;
    		$student_info->save();
    	}
    	return redirect()->route('student.profile.documents')->with('success', 'E-Portfolio removed successfully!');
    }

    public function removePublication2(Request $request) {
    	$user = Auth::user();
    	$student_info = $user->student_info;

    	if($student_info->publication2_url) {
    		Storage::delete($student_info->publication2_url);
    		$student_info->publication2_url = null;
    		$student_info->save();
    	}
    	return redirect()->route('student.profile.documents')->with('success', 'Publication 2 removed successfully!');
    }

    public function removePublication1(Request $request) {
    	$user = Auth::user();
    	$student_info = $user->student_info;

    	if($student_info->publication1_url) {
    		Storage::delete($student_info->publication1_url);
    		$student_info->publication1_url = null;
    		$student_info->save();
    	}
    	return redirect()->route('student.profile.documents')->with('success', 'Publication 1 removed successfully!');
    }

    public function profileEdit(Request $request) {
    	$user = Auth::user();
    	$this->studentValidator($request->all())->validate();
    	$student_info = $user->student_info;
    	$student_info->nationality = $request->nationality;
    	$student_info->address = $request->address;
    	$student_info->lecturer_id = $request->supervisor;
    	$student_info->home_country_contact = $request->home_country_contact;
    	$student_info->contact_number = $request->contact_number;
    	$student_info->qualification1 = $request->qualification1;
    	$student_info->qualification2 = $request->qualification2;
    	$student_info->qualification3 = $request->qualification3;
    	$student_info->facebook_link = $request->facebook;
    	$student_info->instagram_link = $request->instagram;
    	$student_info->save();
    	return redirect()->route('student.profile.edit')->with('success', 'Changes made successfully!');
    }

    protected function studentValidator(array $data)
	{
	  return Validator::make($data, [
	    'nationality' => ['required', 'string', 'max:255'],
	    'address' => ['required', 'string', 'max:255'],
	    'supervisor' => ['required', 'string'],
	    'home_country_contact' => ['required', 'string', 'max:255'],
	    'contact_number' => ['required', 'string', 'max:255'],
	    'qualification1' => ['required', 'string', 'max:255'],
	  ]);
	}

	protected function courseValidator(array $data)
	{
	  return Validator::make($data, [
	    'course' => ['required', 'string', 'max:255', 'unique:student_courses'],
	  ]);
	}
}
