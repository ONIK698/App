<?php
namespace App\Http\Controllers;
use Request;
use DB;
use App\Entities\Category;

class SearchController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function search(Request $request)
	{
		 $objCategory = new Category();
        $categories = $objCategory->get();
		$query = Request::input('search');
		$articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);
		return view('account.ART', ['articles' => $articles,'categories' => $categories]);
		//return view('account.art',['categories' => $categories], compact('articles', 'query'));
	 }
}