<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{
    public function __construct(Model $model);

    public function create(array $attributes): Model;

    public function all(): Collection;

    public function find($id): ?Model;

}
