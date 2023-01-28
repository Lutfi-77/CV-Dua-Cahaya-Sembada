<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\Service;
use App\Models\Image;

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
            'image' => 'mimes:jpeg,png,jpg',
            'icon' => 'mimes:jpeg,png,jpg,svg'
        ]);

        if($request->hasFile('image') || $request->hasFile('icon')){
            $upload = $request->file('image')->store('img/service');
            $icon = $request->file('icon')->store('img/service/icon');
            $service->image = $upload;
            $service->icon = $icon;
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
            'image' => 'mimes:jpeg,png,jpg',
            'icon' => 'mimes:jpeg,png,jpg,svg'
        ]);
        
        $service = Service::find($id);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/service');
            $service->image = $upload;
        }else if($request->hasFile('icon')){
            $icon = $request->file('icon')->store('img/service/icon');
            $service->icon = $icon;
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
            Storage::disk('public')->delete($service->icon);
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('service');
        }else{
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('service');
        }
        
    }
}
