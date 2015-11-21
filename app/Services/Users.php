<?php

namespace Service;

use Model\User;

/**
* 
*/
class Users
{
    // Service 使用テスト
    static function getQuery()
    {
        $result = User::toSql();

        return $result;
    }
}