<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'views',
        'answers',
        'votes',
        'best_answer_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
