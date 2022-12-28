<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $menus = [
        [
            "title" => "Home",
            "link" => "#",
            "icon" => "home"
        ], 
        [
            "title" => "Form",
            "link" => "#",
            "icon" => "home"
        ], 
        [
            "title" => "Card",
            "link" => "#",
            "icon" => "home"
        ]
    ];
}
