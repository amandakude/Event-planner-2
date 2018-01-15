<div class="event-post">
    <h2 class="event-title">
        <a href='/events/{{ $event->id }}'> 
            {{ $event->title }}
        </a>
    </h2>
            <i class="event-meta">When: {{ $event->date }} {{ $event->time }}</i> <br>
            <i class="event-meta">Added by: {{ $event->user->name }} </i>

            <hr>
            <p>{{ $event->body }}</p>
</div>
