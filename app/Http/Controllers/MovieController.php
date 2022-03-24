<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        
    }

    public function create()
    {
        return view('add-movie');
    }

    public function store(Request $request)
    {
        $movies = new Movie();

        $movies->movie_name = $request->input('movie-name');
        $movies->rating = $request->input('rating');
        $movies->duration = $request->input('duration');

        // $movies->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/movies/',$filename);
            $movies->image = $filename;
        }

        $movies->genre = $request->input('genre');
        $movies->synopsis = $request->input('synopsis');

        $movies->save();

        return redirect("dashboard")->with('status', 'Movie added successfully');

    }

    public function edit($id)
    {
           $movie = Movie::find($id);
           $tab = new Movie();
           return view("edit", ["movie"=>$movie, "tab"=>$tab]);
    }

    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'movie-name' => 'required'
        ]);

        $movies = Movie::find($id);

        $movies->movie_name = $request->input('movie-name');
        $movies->rating = $request->input('rating');
        $movies->duration = $request->input('duration');
        
        // image
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/movies/',$filename);
            $movies->image = $filename;
        }
        // image

        $movies->genre = $request->input('genre');
        $movies->synopsis = $request->input('synopsis');

        $movies->update();

        // $movies = var_dump( (array) $movies );
        
        // $movie = Movie::find($id)->update($movies);
        $id = $movies->id;

        // return back()->with('success', ' Data updated successfully !!!');
        return redirect("movie/".$movies->id."/detail");
    }

    public function destroy($id)
    {
        //
        $movie = Movie::find($id);

        $movie->delete();

        return redirect("movies")->with('success', ' Deleted.');
    }

    public function get_account_info()
    {
        return view('profile');
    }

    public function movies()
    {
        $movie_list = Movie::all();
        return view('movies', ["movie_list"=>$movie_list]);
    }
    public function create_movie()
    {
        return view('add-movie');
    }
}
