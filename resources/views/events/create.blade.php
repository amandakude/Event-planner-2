@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Create an event</h1></div>

                <div class="panel-body">
                    
                     <form method="POST" action="/events">
        
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif    

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>

                        @if ($errors->has('date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif

                        <div class="form-group">
                            <label for="time">Time:</label>
                            <input type="time" class="form-control" id="time" name="time">
                        </div>

                        @if ($errors->has('time'))
                            <span class="help-block">
                                <strong>{{ $errors->first('time') }}</strong>
                            </span>
                        @endif

                        <div class="form-group">
                            <label for="body">Description</label>
                            <textarea id="body" name="body" class="form-control"></textarea>
                        </div>

                        @if ($errors->has('body'))
                            <span class="help-block">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                        @endif

                        
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" value='0'>
                            <label class="form-check-label" for="public">Public</label>
                          </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection
