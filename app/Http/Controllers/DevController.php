<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dev;

class DevController extends Controller
{
    public function get()
    {
        return response()->json(Dev::get());
    }

    public function post(Request $request)
    {
        $dev = new Dev();
        $dev->name = $request->input('name');
        $dev->username = $request->input('username');
        $dev->bio = $request->input('bio');
        $dev->followers = $request->input('followers');
        $dev->following = $request->input('following');
        $dev->stars = $request->input('stars');
        $dev->organization = $request->input('organization');
        $dev->location = $request->input('location');
        $dev->email = $request->input('email');
        $dev->link = $request->input('link');
        $dev->web = $request->input('web');
        $dev->password = $request->input('password');

        $dev->save();
        return response()->json($dev);
    }

    public function put(Dev $devs, $id, Request $request)
    {
        $dev = $devs->find($id);
        $dev->name = $request->input('name');
        $dev->username = $request->input('username');
        $dev->bio = $request->input('bio');
        $dev->followers = $request->input('followers');
        $dev->following = $request->input('following');
        $dev->stars = $request->input('stars');
        $dev->organization = $request->input('organization');
        $dev->location = $request->input('location');
        $dev->email = $request->input('email');
        $dev->link = $request->input('link');
        $dev->web = $request->input('web');
        $dev->password = $request->input('password');

        $dev->save();
    }

    public function delete(Dev $dev, $id)
    {
        Dev::destroy($id);
    }

    public function search(Dev $devs, $id)
    {
        $dev = $devs->find($id);
        return response()->json($dev);
    }

}
