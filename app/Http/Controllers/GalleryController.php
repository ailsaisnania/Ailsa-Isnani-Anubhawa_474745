<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\project;

class GalleryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data = array(
    'id' => "projects",
    'menu' => 'Gallery',
    'galleries' => project::where('picture', '!=',
    '')->whereNotNull('picture')->orderBy('title',
    'desc')->paginate(7)
    );
    // return view('gallery.index')->with($data);
    return response()->json(['data' => $data]);
    }


    public function indexs()
    {
    $data = array(
    'id' => "projects",
    'menu' => 'Gallery',
    'galleries' => project::where('picture', '!=',
    '')->whereNotNull('picture')->orderBy('title',
    'desc')->paginate(7)
    );
    return view('gallery.index')->with($data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
