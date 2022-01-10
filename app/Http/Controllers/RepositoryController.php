<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{

    public function get()
    {
        return response()->json(Repository::get());
    }

    public function post(Request $request)
    {

    }

    public function put(Dev $devs, Request $request, $id)
    {

    }

    public function delete(Dev $dev, $id)
    {

    }
}
