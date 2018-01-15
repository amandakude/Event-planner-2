<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'date', 'time', 'body', 'public', 'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }
    
    public function addKeyword($word)
    {
        $this->keywords()->create(compact('word'));
    }
}
