<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

use App\Http\Requests\HelloRequest;

use Illuminate\Support\Facades\DB;

use Validator;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Person;

class HelloController extends Controller
{
	

    public function index(request $request)
    {
		return view('hello.index', ['request' => $request]);
    }
}

