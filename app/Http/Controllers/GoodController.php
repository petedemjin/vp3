<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Http\Requests\GoodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function good(int $id)
    {
        /** @var Good $good */
        $good = Good::query()->with('category')->find($id);
        return view('good', ['good' => $good]);
    }

    public function category(int $id)
    {
        /** @var Category $category */
        $goods = Good::query()->where('category_id', '=', $id)->paginate(6);
        return view('home', [
            'goods' => $goods,
            'categories' => Category::all(),
            'currentCategory' => Category::find($id)
        ]);
    }



    function edit($id)
    {
        $good = Good::query()->find($id);
        return view('goods.edit', ['good' => $good]);
    }

    function save(GoodRequest $request)
    {
        $good = Good::query()->find($request->id);

        $good->title = $request->title;
        $good->price = $request->price;
        $good->description = $request->description;
        $good->save();
        return redirect()->route('admin.goods');
    }

    function delete($id)
    {
        Good::query()->find($id)->delete();
        return redirect()->route('admin.goods');
    }

}
