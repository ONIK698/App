<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\People;
class IndexController extends Controller
{
    //
	public function execute(Request $request) {
		
		
		
		return view('frontend.index');
	}
}