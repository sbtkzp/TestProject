<?php

namespace Service;

use Model\User;

/**
* 
*/
class UserService
{
    // Service 使用テスト
    static function getQuery()
    {
        $result = User::toSql();

        return $result;
    }
}