<?php

namespace Service;

use Model\Post;

/**
* 
*/
class Posts
{
    static function getQuery()
    {
        $result = Post::toSql();

        return $result;
    }

    // 記事1件取得
    static function getPostData($id)
    {
        $post = Post::find($id);
        self::setFormattedDate($post);

        return $post;
    }

    // 全件取得
    static function getPostAll()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            self::setFormattedDate($post);
        }

        return $posts;
    }

    private static function setFormattedDate($post)
    {
        $post->created_at_formatted = date_format($post->created_at, 'Y年m月d日 G:i');
        $post->updated_at_formatted = date_format($post->updated_at, 'Y年m月d日 G:i');
    }

}