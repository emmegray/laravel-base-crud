<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicsRequest $request)
    {
        $new_comic = new Comic();
        $data = $request->all();

        $new_comic->fill($data);
        $new_comic->slug = $this->createSlug($request->title);

        $new_comic->save();
        return redirect()->route('comics.show', $new_comic->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where("slug", $slug)->first();
        if ($comic) {
            return view('show', compact("comic"));
        }
        abort(404, 'Comic not found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            return view('edit', compact("comic"));
        }
        abort(404, 'Comic not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicsRequest $request, $id)
    {
        $comic = Comic::find($id);

        $comic->title = $request->title;
        $comic->cover = $request->cover;
        $comic->type = $request->type;
        $comic->slug = $this->createSlug($request->title);
        $comic->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = $_REQUEST['id'];
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('home')->with('message', "Comic $comic->name was deleted");
    }

    function createSlug($string)
    {
        $slug = Str::slug($string, '-');
        $comicWithSlug = Comic::where('slug', $slug)->first();
        if ($comicWithSlug) {
            $slug = $slug . '-' . rand(10, 6969);
        }
        return $slug;
    }
}
