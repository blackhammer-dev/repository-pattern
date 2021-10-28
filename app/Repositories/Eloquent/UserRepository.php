<?php


namespace App\Repositories\Eloquent;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    // auto bind in ioc container
    // public function __construct(Model $model)
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}
