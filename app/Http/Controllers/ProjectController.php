<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Post::All();
        //
        $data = array(
            'id' => "projects" ,
            'projects' => project::all()
        );
        return view('projects.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
        //validating data
        $validateData = $request->validate([
            'title'=> 'required|min:2', //alpha numerik tidak menerima spasi sehingga tidak menerima input lebih dari 1 kata
            'subtitle' => 'required',
            'description' => 'required'
        ]);

        //req input
        $projects = new project;
        $projects->title = $request->input('title');
        $projects->subtitle = $request->input('subtitle');
        $projects->description = $request->input('description');
        $projects->save();
        return redirect('projects')-> with('success','data succesfully added');   


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
        // return project::find($id);
        $data = array(
            'id' => "projects" ,
            'projects' => project::find($id)
        );
        return view('projects.show')->with($data);

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
        'id' => "projects" ,
        'projects'=> project::find($id) 
        );
        return view('projects.edit')->with($data);
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
        //validating data
        $validateData = $request->validate([
            'title'=> 'required|min:2', //alpha numerik tidak menerima spasi sehingga tidak menerima input dengan 1 kata
            'subtitle' => 'required',
            'description' => 'required'
        ]);

        project::where('id', $request->id)->update(['title'=>$request->title,
        'subtitle'=> $request-> subtitle,
        'description'=> $request->description
       ]);
       
       return redirect('projects')-> with('success','data succesfully updated');
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
        $projects = project::find($id);
        $projects->delete();

        return redirect('/projects')->with(['success' => 'data has succesfully removed']);

    }

    public function hapus($id)
    {
        $projects = Project::find($id);
        $projects->delete();
        return redirect('/projects')->with(['success' => 'data has succesfully removed']);
    }
}
