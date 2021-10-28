<?php


namespace App\Repositories\Eloquent;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    // auto bind in ioc container
    // public function __construct(Model $model)
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function searchByKey($key,$searchString) : Collection
    {
        return $this->model->where($key, 'like',
            '%'
            . $searchString
            . '%')->get();
    }
}
