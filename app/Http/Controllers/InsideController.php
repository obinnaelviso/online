<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inside;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Auth;

class InsideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:inside');
    }

    public function index() {
    	return view('registerinside');
    }

    protected function insideValidator(array $data)
	{
	  return Validator::make($data, [
	    'firstname' => ['required', 'string', 'max:255'],
	    'lastname' => ['required', 'string', 'max:255'],
	    'catype' => ['required', 'string'],
	    'idnum' => ['required', 'string', 'max:255'],
	    'correspondence' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'max:255'],
        'mailaddress' => ['required', 'string', 'max:255'],
        'telephone' => ['required', 'string', 'max:255'],
        'whatsapp' => ['required', 'string', 'max:255'],
        'schoolname' => ['required', 'string', 'max:255'],
        'participants' => ['required', 'string', 'max:255'],
        'productname' => ['required', 'string', 'max:255'],
        'cert' => ['required', 'string', 'max:255'],
        'medal' => ['required', 'string', 'max:255'],
	    'password' => ['required', 'string', 'max:255', 'confirmed'],
	  ]);
	}
}
