<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DevController extends Controller
{
    public function index()
    {
        return response()->json(Post::get());
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
     *
     */
    public function store(Request $request)
    {
        $post = post::get($id);
        $post->name = $request->input('name');
        $post->username = $request->input('username');
        $post->bio = $request->input('bio');
        $post->followers = $request->input('followers');
        $post->following = $request->input('following');
        $post->stars = $request->input('stars');
        $post->organization = $request->input('organization');
        $post->location = $request->input('location');
        $post->email = $request->input('email');
        $post->link = $request->input('link');
        $post->web = $request->input('web');
        $post->password = $request->input('password');

        $post->save();
        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function show(Dev $dev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function edit(Dev $dev)
    {
        $post = Post::get($id);
        $post->name = $request->input('name');
        $post->username = $request->input('username');
        $post->bio = $request->input('bio');
        $post->followers = $request->input('followers');
        $post->following = $request->input('following');
        $post->stars = $request->input('stars');
        $post->organization = $request->input('organization');
        $post->location = $request->input('location');
        $post->email = $request->input('email');
        $post->link = $request->input('link');
        $post->web = $request->input('web');
        $post->password = $request->input('password');

        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dev $dev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dev  $dev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dev $dev)
    {
        return response()->json(Post::destroy($id));
    }

}
