<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'img_path',  'description',  'user_id', ];

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
