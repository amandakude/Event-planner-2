<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Keyword;

class KeywordController extends Controller
{
    public function store(Event $event)
    {
        $this->validate(request(), ['word' => 'required|min:2|max:15']);
                
        $event->addKeyword(request('word'));
        
        return back();
    }
}
