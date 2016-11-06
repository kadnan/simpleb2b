<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getParentCategories()
    {
        return self::where('parent',0)->get();
    }
}
