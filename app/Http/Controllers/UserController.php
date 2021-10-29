<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Facades\App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    public function index()
    {
        return UserRepositoryInterface::all();
    }

    public function searchByName(SearchRequest $searchRequest)
    {
        return UserRepositoryInterface::searchByKey('name', $searchRequest->input('query_param'));
    }

    public function store(UserRequest $request)
    {
        return UserRepositoryInterface::create($request->all());
    }

    public function show($id)
    {
        return UserRepositoryInterface::findOrFail($id);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        return UserRepositoryInterface::update($id, $request->all());
    }

    public function destroy($id): bool
    {
        return UserRepositoryInterface::delete($id);
    }
}
