<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // All likes of this user
    public function likes(): HasMany
    {
        return $this->hasMany(Likeable::class);
    }

    public function likedSweets(): MorphToMany
    {
        return $this->morphedByMany(Sweet::class, 'likeable');
    }

    public function likedItems(): MorphToMany
    {
        return $this->morphedByMany(Item::class, 'likeable');
    }

    public function likedBooks(): MorphToMany
    {
        return $this->morphedByMany(Book::class, 'likeable');
    }
}
