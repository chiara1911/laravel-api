<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::paginate(3);
        return response()->json(
            [
                'success' => true,
                'results' => $categories,
            ]
        );
        // return response()->json($projects);
    }
    public function show($slug)
{
//    $category =category::find($id);
   $category =Category::all();
    return response()->json(
        [
            'success' => true,
            'results' => $category
        ]
    );
}}
