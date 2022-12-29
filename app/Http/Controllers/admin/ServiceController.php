<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        return view('admin.service.service', ["menus" => $this->menus]);
    }

    public function addForm()
    {
        return view('admin.service.addForm', ["menus" => $this->menus]);
    }

}
