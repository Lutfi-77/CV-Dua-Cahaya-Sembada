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

        $latest_client = Client::latest()->limit(5)->get();
        $latest_category = Category::latest()->limit(5)->get();
        $latest_project = Project::latest()->limit(5)->get();
        $latest_service = Service::latest()->limit(5)->get();

        $data = [
            'menus' => $this->menus,
            'total_client' => $client,
            'total_category' => $category,
            'total_project' => $project,
            'total_service' => $service,

            'latest_client' => $latest_client,
            'latest_category' => $latest_category,
            'latest_project' => $latest_project,
        ];
        
        return view('admin.dashboard', $data);
    }

}
