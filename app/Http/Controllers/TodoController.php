<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Todo;
use DB;

class TodoController extends Controller
{
	public function destroy($id){
		$todo = Todo::find($id);
		$todo->delete();

		return redirect('/');
	}

    public function store(Request $request)
    {
    	$title = $request->input('title');
    	//DB::insert('insert into todos (title) VALUES (?)', [$title]);
    	//DB::table('todos')->insert(['title'=>$request->input('title')]);
    	
    	$todo = new Todo();
    	$todo->title = $title;
    	$todo->save();

    	/*Todo::create([
    		'title' => $title
    	]);*/
    	
    	return redirect('/');
    }

    public function done($id)
    {
    	$todo = Todo::find($id);
    	if($todo->done == 1){
    		$todo->done = 0;
    	}else {
    		$todo->done = 1;
    	}
    	$todo->save();

    	return redirect('/');
    }
}
