<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static function getAllCategory()
    {
        return [
          0 => [
              'id' => 1,
              'name' => 'National'
          ],
          1 => [
              'id' => 2,
              'name' => 'Education'
          ],
          2 => [
              'id' => 3,
              'name' => 'Sports'
          ],
          3 => [
              'id' => 4,
              'name' => 'Religion'
          ],
        ];
    }
}
