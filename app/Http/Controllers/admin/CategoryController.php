<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.index', ['menus' => $this->menus]);
    }

    public function categoryAdd()
    {
        return view('admin.category.add', ['menus' => $this->menus]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $category = new Category;
        $category->category = $request->title;
        $category->save();
        return redirect()->route('category');
    }

}
