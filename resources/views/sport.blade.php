@extends('welcome')
@section('content')

    @foreach ($single as $item)
        <a href="{{route('odds', 
                            [   'key' => $item['sport_key'],
                                'team1' => $item['teams'][0],
                                'team2' => $item['teams'][1],
                                'sites' => $item['sites']
                            ]
                        )}}"
            >
            <div>
                <span>{{$item['teams'][0]}}</span>
                <span class="ml-4">{{$item['teams'][1]}}</span>
                <span class="ml-4">{{date('Y-m-d h:i:s', $item['commence_time'])}}</span>
            </div>
        </a>
        
    @endforeach

@endsection