<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pageController extends Controller {
	public function __construct()
	{
		$this->middleware('guest');
	}
/*
	public function aboutus(){
		return '안녕하세요 aboutus입니다';
	}

	public function location(){
		return '안녕하세요 location입니다';
	}

	public function copyright(){
		return '안녕하세요 copyright입니다';
	}
*/
	public function page($pageId){

		if($pageId == 'test')
			abort(404);

		return view('layouts.page', ['pageName' => $pageId]);
		//return '안녕하세요' .$pageId.'입니다';
	}
}