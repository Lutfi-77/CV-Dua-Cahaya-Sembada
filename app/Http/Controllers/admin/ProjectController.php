<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', ['menus' => $this->menus, 'projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.project.add', ['menus' => $this->menus, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/project');
            $project->image = $upload;
        }

        $project->title = $request->title;
        $project->category_id = $request->category;
        $project->description = $request->description;
        $project->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('project.index');
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
        $project = Project::find($id);
        $categories = Category::all();
        return view('admin.project.edit', ['menus' => $this->menus, 'categories' => $categories, 'project' => $project]);
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
        $project = Project::find($id);
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/project');
            $project->image = $upload;
        }

        $project->title = $request->title;
        $project->category_id = $request->category;
        $project->description = $request->description;
        $project->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $delete = $project->delete();
        if( $delete ){
            if( $project->image){
                Storage::disk('public')->delete($project->image);
            }
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('project.index');
        }else{
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('project.index');
        }
    }
}
