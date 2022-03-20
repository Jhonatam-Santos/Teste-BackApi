<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{

    public function get(Request $request)
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

    public function put(Repository $repos, $repo_id, Request $request)
    {
        $repo = $repos->find($repo_id);
        $repo->repo_name = $request->input('repo_name');
        $repo->text = $request->input('text');
        $repo->repo_stars = $request->input('repo_stars');

        $repo->save();
        return response()->json($repo);
    }

    public function delete(Repository $repo, $repo_name)
    {
        Repository::destroy($repo_name);
    }

    public function search(Request $request)
    {
        $dev_id = $request->input('dev_id');
        $repositorios = Repository::where('dev_id', $dev_id)->get();
        return response()->json($repositorios);
    }
}
