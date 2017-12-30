@extends('layout.master')
@section('content')
<h5>Team details:</h5>
<p>{{$team->name}}</p>
<p>{{$team->email}}</p>
<p>{{$team->address}}</p>
<p>{{$team->city}}</p>
<p>Players:</p>
<ul class="list-unstyled">
  @foreach($team->players as $player)
    <li>
      <p><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></p>
    </li>
  @endforeach
</ul>

@if(count($team->comments))
        <hr/>
        <h4>Comments:</h4>
        <ul class="list-unstyled">
            @foreach($team->comments as $comment)
                <li>
                    <p>
                        <strong>Author:</strong> {{ $comment->user->name }}
                    </p>
                    <p>
                        {{ $comment->text }}
                    </p>
                </li>
            @endforeach
        </ul>
    @endif
    <h4>Post a comment</h4>
    <form method="POST" action=" /comments/add/{{ $team->id }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="author">Your name:</label>
            <input type="text" class="form-control" id="author" name="author"/>
        </div>

        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea class="form-control" id="text" name="text"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection