<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    /**
     * Display all the movies in the DB with pagination for 
     *admin to delete or update
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(5);
        return view('admin', ['movies' => $movies]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('admin', ['movie' => $movie]);
    }

    /**
     * Display movies from the Api https://www.themoviedb.org/
     * @return \Illuminate\Http\Response
     */
    public function displayFromApi(Request $request)
    {
        $period = $request->input('period', 'day');
        $movies = Http::get("https://api.themoviedb.org/3/trending/movie/{$period}?api_key=" . env('API_KEY_MOVIEDB') . "&language=en-US&page=1")
            ->json()['results'];
        return view('admin', ['moviesApi' => $movies, 'period' => $period]);
    }

    /**
     * Store a movie from the Api https://www.themoviedb.org/ in the DB
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
        return redirect()->route('movies');
    }

    /**
     * Update the data for a movie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $movie = Movie::find($id);
        $movie->update(
            [
                'title' => $request->title,
                'overview' => $request->overview,
                'release_date' => $request->release_date,
                'poster_path' => $request->poster_path,
                'vote_average' => $request->vote_average,
                'vote_count' => $request->vote_count,
            ]
        );
        return redirect()->route('movies');
    }

    /**
     * Remove the movie from the DB.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->route('movies');
    }
}
