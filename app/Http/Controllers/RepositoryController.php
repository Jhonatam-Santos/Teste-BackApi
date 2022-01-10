<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;
use App\Models\Dev;

class RepositoryController extends Controller
{

    public function get()
    {
        return response()->json(Repository::get());
    }

    public function post(Request $request)
    {
        $repo = new Repository();
        $repo->repo_name = $request->input('repo_name');
        $repo->text = $request->input('text');
        $repo->repo_stars = $request->input('repo_stars');
        $repo->dev_id = $request->input('dev_id');

        $repo->save();
        return response()->json($repo);
    }

    public function put(Dev $devs, Request $request, $id)
    {

    }

    public function delete(Dev $dev, $id)
    {

    }
}
