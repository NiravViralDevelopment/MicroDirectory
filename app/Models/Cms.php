<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;

    protected $table = 'cms';
     protected $fillable = [
        'title',
        'description',
        'page_title',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'is_active',
    ];


}
