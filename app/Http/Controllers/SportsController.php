<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SportsController extends Controller
{
    private $endpoint = 'https://api.the-odds-api.com';
    private $api_key = 'a5ce5bf0a4bc7072d7c869de795b1be7';

    #GET sports'

    public function index()
    {
        $sports = Http::get($this->endpoint.'/v3/sports/?apiKey='. $this->api_key)
            ->json()['data'];
        
        dump($sports);

        return view('welcome', [
            'sports' => $sports
        ]);
    }

    public function show($key){
        $sports = Http::get($this->endpoint.'/v3/sports/?apiKey='. $this->api_key)
        ->json()['data'];

        $sport = Http::get($this->endpoint.'/v3/odds/?apiKey='. $this->api_key.'&sport='.$key.'&region=eu')
            ->json()['data'];

        //  dd($sport[0]);

        return view('sport', [
            'sports' => $sports,
            'single' => $sport    
        ]);
    }
    
    public function odds(Request $request)
    {
        $sports = Http::get($this->endpoint.'/v3/sports/?apiKey='. $this->api_key)
        ->json()['data'];

        // $sport = Http::get($this->endpoint.'/v3/odds/?apiKey='. $this->api_key.'&sport='.$key.'&region=eu')
        //     ->json()['data'];

        // dd($request->get('key'), $request->get('team1'), $request->get('team2'), $request->get('sites'));

        $team1 = $request->get('team1');
        $team2 = $request->get('team2');
        $sites = $request->get('sites');

        return view('odds', [
            'sports' => $sports,
            // 'single' => $sport ,
            'team1' => $team1,
            'team2' => $team2,
            'sites' => $sites
        ]);
    }
}
