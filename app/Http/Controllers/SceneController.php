<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SceneController extends Controller
{
    public function __invoke(){
		return view('scene');
	}
}
