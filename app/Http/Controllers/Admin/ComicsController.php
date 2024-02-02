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
        $data = $request->all();

        $newcomic = new Comic();

        $newcomic->title = $data['title'];
        $newcomic->description = $data['description'];
        $newcomic->thumb = $data['thumb'];
        $newcomic->price = $data['price'];
        $newcomic->series = $data['series'];
        $newcomic->sale_date  = $data['sale_date'];
        $newcomic->type  = $data['type'];
        $newcomic->artists  = explode(', ',$data['artists']);
        $newcomic->writers  = explode(', ',$data['writers']);


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
        // $comic->delete();
        dd($comic);
        return redirect()->route('comics.index');
    }
}
