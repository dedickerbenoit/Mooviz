<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $query = $request->input('q');
    $results = Movie::where('title', 'like', "%$query%")->get();

    return view('welcome', ['results' => $results]);
}
}
