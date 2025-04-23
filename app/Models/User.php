<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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


    // Un usuario tiene un rol
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Un usuario puede tener muchos artículos
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // Un usuario puede hacer muchos comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Un usuario puede hacer muchas valoraciones
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    // Un usuario puede realizar muchos reportes
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    // Un usuario puede crear muchos threads
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    // Un usuario puede crear muchos posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}