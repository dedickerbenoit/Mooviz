<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display movies from the Api https://www.themoviedb.org/
     * @return \Illuminate\Http\Response
     */
    public function displayFromApi()
    {
        $movies = Http::get("https://api.themoviedb.org/3/movie/popular?api_key=295727b3dab652895429e8cf7a69375e&language=en-US&page=1")
            ->json()['results'];
        // dd($movies);
        return view('movies', ['movies' => $movies]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'overview' => 'required',
                'release_date' => 'required',
                'poster_path' => 'required',
                'vote_average' => 'required',
                'vote_count' => 'required',
            ]
        );

        $movie = Movie::create(
            [
                'title' => $request->title,
                'overview' => $request->overview,
                'release_date' => $request->release_date,
                'poster_path' => $request->poster_path,
                'vote_average' => $request->vote_average,
                'vote_count' => $request->vote_count,
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
