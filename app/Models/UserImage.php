<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_path',
        'image_name',
        'image_type',
        'image_size',
        'is_profile',
        'is_active'
    ];

    protected $casts = [
        'is_profile' => 'boolean',
        'is_active' => 'boolean',
        'image_size' => 'integer'
    ];

    /**
     * Get the user that owns the image.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include active images.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include profile images.
     */
    public function scopeProfile($query)
    {
        return $query->where('is_profile', true);
    }

    /**
     * Get the full URL of the image.
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }
} 