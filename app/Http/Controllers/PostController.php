<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //return Post::All();

        // return Post::select('title', 'id') <br> ->where('id', 1)-> get();

        $data = array('id' => "posts" ,
        'posts'=> Post::All() 
        );

        return view('posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //biasanya diarahkan untuk manggil form insert
    {
        return view('posts.create');
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
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
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
        // return Post::find($id);
        $data = array('id' => "posts" ,
        'posts'=> Post::find($id) 
        );

        return view('posts.show')->with($data);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array('id' => "posts" ,
        'posts'=> Post::find($id) 
        );
        return view('posts.edit')->with($data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //request dari view, dan id dari primary key
    {
        Post::where('id', $request->id)->update(['title'=>$request->title,
         'description'=> $request->description
        ]);
        
        return redirect('posts');
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
        $post = Post::find($id);
        $post->delete();
        return redirect('posts')-> with('success','data succesfully removed');   
        //
    }
    public function __construct()
    {
    $this->middleware('auth', ["except" => ["index", "show"]]);
    }
}
