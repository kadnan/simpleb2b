<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function scopegetLatest($query,$limit)
    {
        return $query->orderBy('created_at', 'desc')->take($limit)->select(['id','title'])->get();
    }
}
