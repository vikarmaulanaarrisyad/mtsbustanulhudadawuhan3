<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;

class UserRepositoryImplement extends Eloquent implements UserRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * get by email
     * @param $email
     * @return mixed
     */
    public function getByEmail($email)
    {
        return $this->model->where('email', $email)->get();
    }
}
