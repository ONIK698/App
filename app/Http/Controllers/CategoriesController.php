<?php
namespace App\Http\Controllers;
use App\Entities\Category;
class CategoriesController extends Controller
{
  public function index()
  {
      $objCategory = new Category();
      $categories = $objCategory->orderBy('id')->paginate(10);
      return view('index', ['categories' => $categories]);
  }
  public function showArticle(int $id, $slug)
  {
      // $objArticle = Article::find($id);
      // if(!$objArticle) {
      //     return abort(404);
      // }
      // $comments = $objArticle->comments()->where('status', 1)->get();
      // return view('show_article', ['article' => $objArticle, 'comments' => $comments]);
  }
}