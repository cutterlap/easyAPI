<?php

namespace App\Validation;

use App\Models\SysUserModel;
use Exception;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data): bool
    {
        try {
            $model = new SysUserModel();
            $user = $model->findUserByUserName($data['username']);
            return password_verify($data['password'], $user['password']);
        } catch (Exception $e) {
            return false;
        }
    }
}
