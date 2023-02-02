<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index', ['menus' => $this->menus, 'clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.add', ['menus' => $this->menus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $validated = $request->validate([
            'client_name' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/clients');
            $client->client_image = $upload;
        }
        $client->client_name = $request->client_name;
        $client->save();
        Alert::toast('Data berhasil ditambahkan', 'success');
        return redirect()->route('client.index');
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
        $client = Client::find($id);
        return view('admin.client.edit', ['menus' => $this->menus, 'client' => $client]);
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
            'client_name' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);
        
        $client = Client::find($id);

        if($request->hasFile('image')){
            $upload = $request->file('image')->store('img/clients');
            $client->client_image = $upload;
        }

        $client->client_name = $request->client_name;
        $client->save();
        Alert::toast('Data berhasil diubah', 'success');
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $delete = $client->delete();
        if( $delete ){
            if( $client->client_image ){
                Storage::disk('public')->delete($client->client_image);
            }
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('client.index');
        }else{
            Alert::toast('Data berhasil dihapus', 'error');
            return redirect()->route('client.index');
        }
    }
}
