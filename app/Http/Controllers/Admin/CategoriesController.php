<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
    	$objCategory = new Category();
        $categories = $objCategory->get();
        return view('admin.categories.index', ['categories' => $categories]);

    }
    public function addCategories()
    {
    	return view('admin.categories.add');
    }
    public function addRequestCategory(Request $request)
    {
    	//dd($request->all());
        try {
            $this->validate($request, [
                'title' => 'required|string|min:4|max:25',
                //'description' => 'required'
            ]);
            $objCategory = new Category();
            $objCategory = $objCategory->create([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
            if($objCategory) {
            	        //         return redirect()->route('categories')->with('success', 'Категория успешно добавлена');
                dd("!Категория успешно добавлена");
                //return back()->with('success', 'Категория успешно добавлена');
            }

            dd("!Категория  не добавлена");
        }catch(ValidationException $e) {
            \Log::error($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }
    public function editCategories(int $id)
    {

    }
    public function deleteCategories(Request $request)
    {

    }
}
