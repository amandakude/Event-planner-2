@extends('layouts.app')
@section('content')

<div class="container">
    @foreach ( $users as $user )
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $event->title }}</h4></div>
                    
                </div>
                </div></div>
            @endforeach    
</div>

@endsection
