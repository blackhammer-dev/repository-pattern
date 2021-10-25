<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function searchByName(SearchRequest $searchRequest)
    {
        return User::where('name', 'like',
            '%'
            . $searchRequest->input('query_param')
            . '%')->get();
    }

    public function store(UserRequest $request)
    {
        return User::create($request->all());
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return $user;
    }

    public function destroy($id)
    {
        return User::findOrFail($id)->delete();
    }
}
