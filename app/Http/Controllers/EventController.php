<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Event;

class EventController extends Controller
{
    public function __construct() {
        // only Admin has access
        $this->middleware('auth')->only(['create','store']);
    }
    
    public function index()
    {
        $events = Event::orderBy('date')->get();
        
        return view('events.index', compact('events'));
    }
    
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
    
    public function create()
    {
        return view('events.create');
    }
    
    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'body' => 'required'
        ]);
        
        //$public = Input::get('public') ? true : false;
        
        Event::create([
            'title' => request('title'),
            'date' => request('date'), 
            'time' => request('time'), 
            'body' => request('body'), 
            'public' => request('public'),
            'user_id' => auth()->id()
        ]);
        
        return redirect('/');
    }
    
    public function indexByUser()
    {
        return view('myevents', array('user' => User::all()));
    }  
    
}
