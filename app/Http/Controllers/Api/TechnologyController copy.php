<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    //
    public function index()
    {
        $technologies = Technology::paginate(3);
        return response()->json(
            [
                'success' => true,
                'results' => $technologies,
            ]
        );
        // return response()->json($projects);
    }
    public function show($slug)
{
//    $technology =Technology::find($id);
   $technology =Technology::all();
    return response()->json(
        [
            'success' => true,
            'results' => $technology
        ]
    );
}}
