<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $fillable = [
        'email', 'productName', 'productImage', 'favorite', 'tryLater', 'link',
    ];
}
