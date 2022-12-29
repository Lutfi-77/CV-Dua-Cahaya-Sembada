<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.index', ['menus' => $this->menus]);
    }

    public function categoryAdd()
    {
        return view('admin.category.add', ['menus' => $this->menus]);
    }

}
