<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::paginate();
        return response()->json(
            [
                'success' => true,
                'results' => $projects
            ]
        );
        // return response()->json($projects);
    }
    public function show($slug)
{
//    $project =Project::find($id);
   $project =Project::where('slug', $slug)->with(['category','technologies'])->first();
    return response()->json(
        [
            'success' => true,
            'results' => $project
        ]
    );
}}
