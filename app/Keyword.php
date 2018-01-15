<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'word'
    ];
    
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
