<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'show_password',
        'password',
        'facebook',
        'website',
        'whatsup',
        'country_id',
        'state_id',
        'city_id',
        'age',
        'gender',
        'image',
        'experience',
        'language',
        'other',
        'page_title',
        'meta_title',
        'description',
        'short_description',
        'meta_description',
        'meta_keyword',
        'is_active',
        'is_featured',
        'is_locked',
        'is_block',
        'slug',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the images for the user.
     */
    public function images()
    {
        return $this->hasMany(UserImage::class);
    }

    /**
     * Get the user's profile image.
     */
    public function profileImage()
    {
        return $this->hasOne(UserImage::class)->where('is_profile', true);
    }
}
