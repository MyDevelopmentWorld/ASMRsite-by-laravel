<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Requests;

class MainController extends Controller
{
    public function index(){

    	$todos = Todo::all();
    	//$todos = Todo::onlyTrashed()->get();
    	return view('main',compact('todos'));
    	//return view('main', ['todos' => $todos]);
    }
}
