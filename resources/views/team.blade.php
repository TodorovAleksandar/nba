<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       

        <title>Team</title>
    </head>
    <body>
       <p>{{$team->name}}</p>
       <p>{{$team->email}}</p>
       <p>{{$team->address}}</p>
       <p>{{$team->city}}</p>
    </body>
</html>