<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories()
    {
        $categories = Category::query()->orderBy('id', 'DESC')->get();
        return view('admin.categories', ['categories' => $categories]);
    }

    public function goods()
    {
        $goods = Good::query()->orderBy('id', 'DESC')->get();
        return view('admin.goods', ['goods' => $goods]);
    }

    public function orders()
    {
        return view('admin.orders');
    }


}
