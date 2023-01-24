<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    
    /**
     * Display all the movies in the DB with pagination for 
     *non-connected people
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(5);
        return view('welcome', ['movies' => $movies]);
    }


    /**
     * Display the specified resource for non-connected people.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('welcome', ['movie' => $movie]);
    }

}
