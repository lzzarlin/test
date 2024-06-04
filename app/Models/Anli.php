<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anli extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'category_id',
        'title',
        'slug',
        'keywords',
        'description',
        'isRecommend',
        'thumpic',
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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
