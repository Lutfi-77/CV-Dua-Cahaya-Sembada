<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'image' => 'mimes:jpeg,png,jpg'
        ]);
        $category = new Category;
        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/categories');
            $category->image = $upload;
        }
        $category->category = $request->title;
        $category->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('category');
    }

    public function editForm($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['menus' => $this->menus, 'category' => $category]);
    }

    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);
        $category = Category::find($id);
        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/categories');
            $category->image = $upload;
        }
        $category->category = $request->title;
        $category->save();
        Alert::toast('Data berhasil diubah', 'success');
        return redirect()->route('category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $delete = $category->delete();
        if( $delete ){
            if( $category->image){
                Storage::disk('public')->delete($category->image);
            }
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('category');
        }else{
            Alert::toast('Data berhasil dihapus', 'error');
            return redirect()->route('category');
        }
    }

}
