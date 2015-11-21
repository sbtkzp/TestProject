<?php

namespace Service;

use Model\Post;

/**
* 
*/
class Posts
{
    // Service 使用テスト
    static function getQuery()
    {
        $result = Post::toSql();

        return $result;
    }

    static function getPostData($id)
    {
        $post = Post::find($id);

        return $post;
    }

}