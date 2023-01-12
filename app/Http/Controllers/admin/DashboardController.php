<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Service;
use App\Models\Project;
use App\Models\Client;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $client = Client::count();
        $category = Category::count();
        $project = Project::count();
        $service = Service::count();

        $data = [
            'menus' => $this->menus,
            'total_client' => $client,
            'total_category' => $category,
            'total_project' => $project,
            'total_service' => $service
        ];
        
        return view('admin.dashboard', $data);
    }

}
