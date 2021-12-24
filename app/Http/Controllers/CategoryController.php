<?php


namespace App\Http\Controllers;


use App\Category;
use App\Good;
use App\Http\Requests\GoodRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function edit($id)
    {
        $category = Category::query()->find($id);
        return view('categories.edit', ['category' => $category]);
    }

    function save(GoodRequest $request)
    {
        $category = Category::query()->find($request->id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('admin.categories');
    }

    function delete($id)
    {
        Category::query()->find($id)->delete();
        return redirect()->route('admin.categories');
    }
}