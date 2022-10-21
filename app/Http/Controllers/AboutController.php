<?php

namespace App\Http\Controllers;

use App\Models\about;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "abouts" ,
            'abouts' => about::all()
        );
        return view('abouts.index')->with($data);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('abouts.create');
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
        // $abouts = new about;
        // $abouts->desc = $request->input('desc');
        // $abouts->save();
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
        $data = array(
            'id' => "abouts" ,
            'abouts' => about::find($id)
        );
        // return view('abouts.show')->with($data);

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
        $data = array(
            'id' => "abouts" ,
            'abouts'=> about::find($id) 
            );
            return view('abouts.edit')->with($data);
            //

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
        about::where('id', $request->id)->update(['desc'=>$request->desc
       ]);
       
       return redirect('about')->with('success', 'description successfully updated');
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

    public function __construct()
    {
    $this->middleware('auth', ["except" => ["index", "show"]]);
    }
}
