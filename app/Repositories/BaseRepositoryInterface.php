<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{

    public function create(array $attributes): Model;

    public function all(): Collection;

    public function find($id): ?Model;

    public function findOrFail($id): ?Model;

    public function update($id,$params) : ?Model;

    public function delete($id) : bool;

}
