<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $menus = [];

    public function __construct()
    {
        $this->menus = [
            [
                "title" => "Home",
                "link" => route('dashboard'),
                "icon" => "home"
            ], 
            [
                "title" => "Manage Category",
                "link" => route('category'),
                "icon" => "home"
            ],
            [
                "title" => "Manage Service",
                "link" => route('service'),
                "icon" => "home"
            ], 
            [
                "title" => "Manage Project",
                "link" => route('project.index'),
                "icon" => "home"
            ], 
            [
                "title" => "Manage Client",
                "link" => route('client.index'),
                "icon" => "home"
            ],
        ];
    }
}
