<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DevController extends Controller
{
    public function get() {
        echo "sim";
    }

    public function delete($id) {
        return response()->json(Post::destroy($id));
    }

    public function post($id) {
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

    public function put(Request $request, $id) {
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

        $post->save();
        return response()->json($post);
    }
}
