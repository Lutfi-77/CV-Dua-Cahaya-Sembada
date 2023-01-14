<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;

use App\Models\User;

class ProfileController extends Controller
{
    
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('admin.profile', ['menus' => $this->menus, 'user' => $user]);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'confirmed',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }else{
            $user->password = $user->password;
        }
        $user->save();
        Alert::toast('Data berhasil diubah', 'success');
        return redirect()->route('dashboard');
    }

}
