<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.service', ["menus" => $this->menus, 'services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.service.add', ["menus" => $this->menus, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/service');
            $service->image = $upload;
        }

        $service->title = $request->title;
        $service->category_id = $request->category;
        $service->description = $request->description;
        $service->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('service');

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
        $service = Service::find($id);
        $categories = Category::all();
        return view('admin.service.edit', ["menus" => $this->menus, 'categories' => $categories, 'service' => $service]);
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
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);
        
        $service = Service::find($id);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/service');
            $service->image = $upload;
        }

        $service->title = $request->title;
        $service->category_id = $request->category;
        $service->description = $request->description;
        $service->save();
        Alert::toast('Data berhasil diubah', 'success');
        return redirect()->route('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $delete = $service->delete();
        if( $delete ){
            Storage::disk('public')->delete($service->image);
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('service');
        }else{
            Alert::toast('Data berhasil dihapus', 'error');
            return redirect()->route('service');
        }
        
    }
}
