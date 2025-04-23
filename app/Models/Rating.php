<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // Una valoración pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Una valoración pertenece a un artículo
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}