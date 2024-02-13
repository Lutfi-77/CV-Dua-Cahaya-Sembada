<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->menus;
        $products = Product::all();
        return view('admin.product.index', compact('products', 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = $this->menus;
        return view('admin.product.add', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $validated = $request->validate([
            'title' => 'required',
            'service' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/product');
            $product->image = $upload;
        }
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->service = $request->service;
        if($product->save()){
            Alert::toast('Data berhasil ditambahkan', 'success');
            return redirect()->route('product.index');
        }
        Alert::toast('Data gagal ditambahkan', 'error');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $menus = $this->menus;
        return view('admin.product.edit', compact('menus', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validated = $request->validate([
            'title' => 'required',
            'service' => 'required',
            'desc' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/product');
            $product->image = $upload;
        }else{
            $product->image = $product->image;
        }
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->service = $request->service;
        if($product->save()){
            Alert::toast('Data berhasil ditambahkan', 'success');
            return redirect()->route('product.index');
        }
        Alert::toast('Data gagal ditambahkan', 'error');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $delete = $product->delete();
        if( $delete ){
            Storage::disk('public')->delete($product->image);
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('product.index');
        }else{
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('product.index');
        }
    }
}
