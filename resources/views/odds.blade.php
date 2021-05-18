@extends('welcome')
@section('content')

    <div>
        <span>{{$team1}}</span>
        <span class="ml-4">{{$team2}}</span>
    </div>

    @foreach($sites as $site)
        <div>{{$site['site_nice']}}</div>
        @foreach($site['odds']['h2h'] as $odd)
            <span>{{$odd}}</span>
        @endforeach
    @endforeach

@endsection