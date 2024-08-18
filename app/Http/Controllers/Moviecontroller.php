<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class moviecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_name' => 'required|max:255',
            'movie_description' => 'required|max:255',
            'movie_gener' => 'required|max:255',
        ]);
    
        Movie::create($request->all());
    
        return redirect()->route('movies.index')->with('success', 'Movie added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movies = Movie::find($id);
    return view('movies.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'movie_name' => ['required'],
            'movie_description' => ['required'],
            'movie_gener' => ['required'],
        ]);
    
        // Find the movie by its ID
        $movies = Movie::find($id);
    
        if (!$movies) {
            // Handle the case where the movies$movies is not found
            return redirect()->route('movies.index')->with('error', 'Movie not found.');
        }
    
        // Update the movies$movies with the validated data
        $movies->movie_name = $request->input('movie_name');
        $movies->movie_description = $request->input('movie_description');
        $movies->movie_gener = $request->input('movie_gener');
        $movies->save();
    
        // Redirect back to the movies index with a success message
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::find($id);
    $movie->delete();

    return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}