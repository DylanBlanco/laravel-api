<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        // $projects = Project::paginate(3);
        // return response()->json([
        //     'image' => $projects['image'],
        //     'title' => $projects['title'],
        //     'author' => $projects['author'],
        //     'date_create' => $projects['date_create'],
        //     'description' => $projects['description'],
        // ]);
        return response()->json($projects);
    }
}
