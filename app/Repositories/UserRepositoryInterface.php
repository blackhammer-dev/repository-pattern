<?php


namespace App\Repositories;


use Illuminate\Support\Collection;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function searchByKey($key, $searchString): Collection;
}
