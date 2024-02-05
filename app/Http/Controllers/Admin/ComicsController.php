<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:40',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:40',
            'artists' => 'required',
            'writers' => 'required',
        ]);
        $data = $request->all();

        $newcomic = new Comic();

        $data['artists']  = explode(', ',$data['artists']);
        $data['writers']  = explode(', ',$data['writers']);
        $newcomic->fill($data);

        $newcomic->save();

        return redirect()->route('comics.show', $newcomic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|decimal:2',
            'series' => 'required|max:40',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:40',
            'artists' => 'required',
            'writers' => 'required',
        ]);
        $data = $request->all();
        $data['artists']  = explode(', ',$data['artists']);
        $data['writers']  = explode(', ',$data['writers']);
        $comic->update($data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
