<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    protected $fillable = [
        'id',
        'sitename',
        'domain',
        'keywords',
        'description',
        'logo',
        'phone',
        'email',
    ];
}
