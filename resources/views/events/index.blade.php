@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Public Events</h1></div>

                <div class="panel-body">
                    
                    @foreach ($events as $event)
                        @include ('events.event')
                    @endforeach

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">More</a>
                        <a class="btn btn-outline-secondary disabled" href="#">Less</a>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>
</div>

       

@endsection