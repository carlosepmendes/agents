<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{

		$people = [
			'Bruno', 'Duarte', 'Samuel', 'Pedro', 'Carlos'
		];

		$name = 'Nuno';

		return view('pages.about', compact('people', 'name'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}

//array('people' => $people, 'name' => $name)