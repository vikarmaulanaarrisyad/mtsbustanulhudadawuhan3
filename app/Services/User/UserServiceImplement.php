<?php

namespace App\Services\User;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Log;

class UserServiceImplement extends ServiceApi implements UserService
{

    /**
     * set title message api for CRUD
     * @param string $title
     */
    protected string $title = "";
    /**
     * uncomment this to override the default message
     * protected string $create_message = "";
     * protected string $update_message = "";
     * protected string $delete_message = "";
     */

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected UserRepository $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    /**
     * get by email
     * @param $email
     * @return array|mixed
     */
    public function getByEmail($email)
    {
        try {
            return $this->mainRepository->getByEmail($email);
        } catch (\Exception $exception) {
            Log::debug($exception->getMessage());
        }
    }
}
