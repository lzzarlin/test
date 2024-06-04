<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'slug',
        'keywords',
        'description',
        'isRecommend',
        'price',
        'package',
        'application',
        'thumpic',
        'pic_one',
        'pic_two',
        'pic_three',
        'pic_four',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function anli()
    {
        return $this->hasMany(Anli::class);
    }
}
