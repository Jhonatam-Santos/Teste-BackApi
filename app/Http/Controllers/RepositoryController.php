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

    public function post(Request $request, Dev $dev)
    {

        $repo = new Repository();
        $repo->RepoName = $request->input('RepoName');
        $repo->text = $request->input('text');
        $repo->RepoStars = $request->input('RepoStars');
        $id = $dev->find($request->input('dev_id'));
        $repo->dev_id = $id;
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
