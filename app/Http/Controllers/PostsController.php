<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brief = new Post();
        $brief ->description = $request -> description;

        $file = $request->file('img_post');
        $destinationPath = 'images/posts/';
        $filename = time().'-'.$file->getClientOriginalName();
        $uploadSuccess = $request -> file('img_post') -> move($destinationPath,$filename);
        
        $brief ->img_post = $destinationPath.$filename;
        $brief ->creator = $request -> creator;
        $brief -> date = $request -> date;

        $brief -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        // return view('post.show',['post'=> $post]);
        return $post;
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
    public function update(Request $request)
    {
        $post = Post ::findOrFail($request -> id);
        $post ->description = $request -> description;
        $post ->creator = $request -> creator;
        $post -> date = $request -> date;

        $post -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        $post = Post::destroy($request -> id);
        return $post;
    }   
}
