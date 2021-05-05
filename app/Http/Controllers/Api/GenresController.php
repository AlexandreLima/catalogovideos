<?php

namespace App\Http\Controllers\Api;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    private $rules = ['name' => 'required|max:255', 'is_active' => 'boolean'];
    public function index()
    {
        return Genre::all();
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        return Genre::create($request->all());
    }

    public function show(Genre $category)
    {
       return $category;
    }

    public function update(Request $request, Genre $category)
    {
        $this->validate($request, $this->rules);
        $category->update($request->all());

        return $category;
    }
 
    public function destroy(Genre $category)
    {
        $category->delete();
        return response()->noContent();
    }
}
