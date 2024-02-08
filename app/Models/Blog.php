<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $data = [];

    public static function getAllBlog()
    {
       return [
         0 => [
             'id' => 1,
             'category_id' => 1,
             'title' => 'This is blog title one',
             'description' => 'lorem',
             'image' => 'h1.jpg',
         ],
         1 => [
             'id' => 2,
             'category_id' => 2,
             'title' => 'This is blog title two',
             'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias cum cumque fuga hic illo ipsa iste minima, pariatur quo, repellat vero. Accusantium harum incidunt nihil pariatur perspiciatis sint voluptates.',
             'image' => 'h2.jpg',
         ],
         2 => [
             'id' => 3,
             'category_id' => 3,
             'title' => 'This is blog title three',
             'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias cum cumque fuga hic illo ipsa iste minima, pariatur quo, repellat vero. Accusantium harum incidunt nihil pariatur perspiciatis sint voluptates.',
             'image' => 'h5.jpg',
         ],
         3 => [
             'id' => 4,
             'category_id' => 4,
             'title' => 'This is blog title four',
             'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias cum cumque fuga hic illo ipsa iste minima, pariatur quo, repellat vero. Accusantium harum incidunt nihil pariatur perspiciatis sint voluptates.',
             'image' => '3.jpg',
         ],
       ];
    }
    public static function getBlogCategoryId($id)
    {
        foreach (self::getAllBlog() as $blog)
        {
            if ($blog['category_id'] == $id)
            {
                array_push(self::$data,$blog);
            }
        }
        return self::$data;
    }
    public static function getBlogById($id)
    {
        foreach (self::getAllBlog() as $blog)
        {
            if ($blog['id']== $id)
            {
                return $blog;
            }
        }
    }
}
