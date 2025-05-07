<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    // Un rol puede tener muchos usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }
}