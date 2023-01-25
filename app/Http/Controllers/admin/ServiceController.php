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
        // $path = array();
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg'
        ], [
            'image.*.mimes' => 'Only jpeg, jpg and png images are allowed',
        ]);

        $service->title = $request->title;
        $service->category_id = $request->category;
        $service->description = $request->description;
        $service->save();

        if($request->hasFile('image')){
            foreach( $request->file("image") as $item ){
                $image = new Image;
                $upload = $item->store('img/service');
                $image->path = $upload;
                $image->service_id = $service->id;
                $image->save();
            }
        }
        
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
            'image.*' => 'mimes:jpeg,png,jpg'
        ], [
            'image.*.mimes' => 'Only jpeg, jpg and png images are allowed',
        ]);
        
        $service = Service::find($id);

        if($request->hasFile('image')){
            foreach( $request->file("image") as $item ){
                $image = new Image;
                $upload = $item->store('img/service');
                $image->path = $upload;
                $image->service_id = $service->id;
                $image->save();
            }
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
        $image = Image::where('service_id', $id)->get();
        $delete = $service->delete();
        if( $delete ){
            if( $image ){
                foreach($image as $item){
                    Storage::disk('public')->delete($item->path);
                }
            }
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('service');
        }else{
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('service');
        }
        
    }

    public function destroyImage($imageId, $serviceId)
    {
        // dd($serviceId);
        $image = Image::find($imageId);
        $delete = $image->delete();
        if( $delete ){
            if( $image ){
                Storage::disk('public')->delete($image->path);
            }
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('service.edit', $serviceId);
        }else{
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('service.edit', $serviceId);
        }
    }
}
