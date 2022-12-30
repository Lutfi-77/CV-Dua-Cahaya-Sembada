<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['menus' => $this->menus, 'categories' => $categories]);
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
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        Alert::toast('Data berhasil dihapus', 'success');
        return redirect()->route('category');
    }

}
