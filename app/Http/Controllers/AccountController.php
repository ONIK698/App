<?php

namespace App\Http\Controllers;

use App\Entities\Category;
use App\Entities\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
	public function index()
    {
        return view('account.index');
    }
    public function indexART()
    {
        $objArticle = new Article();
        $articles = $objArticle->get();
        $objCategory = new Category();
        $categories = $objCategory->get();
        return view('account.ART', ['articles' => $articles,'categories' => $categories]);
        // return view('home');
    }
        public function indexCAT()
    {
        $objCategory = new Category();
        $categories = $objCategory->get();
        return view('account.CAT', ['categories' => $categories]);
        // return view('home');
    }
}