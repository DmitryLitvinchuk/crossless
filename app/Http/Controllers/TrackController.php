<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\User;
use Auth;

class TrackController extends Controller
{
    public function index()
    {
        return view('main');
    }
    
    public function create(Request $request, Track $track, User $user)
    {
        $beat = $request['html'];
        $html = new \Htmldom($beat);
        //$track = new Track;
        
        $title=$html->find('div.interior-title h1', 0)->plaintext;
        $remixer=$html->find('div.interior-title h1.remixed', 0)->plaintext;
        foreach($html->find('div.interior-track-artists a') as $artist) {
            $artist = $artist->innertext.' ';
        }
        $release=$html->find('li.interior-track-released span.value', 0)->plaintext;
        $bpm=$html->find('li.interior-track-bpm span.value', 0)->plaintext;
        $key=$html->find('li.interior-track-key span.value', 0)->plaintext;
        $genre=$html->find('li.interior-track-genre span.value', 0)->plaintext;
        $label=$html->find('li.interior-track-labels span.value', 0)->plaintext;
        $img=$html->find('img.interior-track-release-artwork', 0)->getAttribute('src');;
        $number=$html->find('button.playable-play',0)->getAttribute('data-track');
        $audio_link="https://geo-samples.beatport.com/lofi/$number.LOFI.mp3";
        $track = Track::create(['title' => $title, 
                                'user_id' => Auth::id(), 
                                'number' => $number, 
                                'artist' => $artist, 
                                'genre' => $genre, 
                                'bpm' => $bpm, 
                                'key' => $key, 
                                'cover' => $img,
                                'remixer' => $remixer,
                                'label' => $label,
                                'release' => $release, 
                                'preview' => $audio_link]);
        return view('parser')->with('track', $track);
    }
    
    public function destroy($id)
    {
        $track = Track::findOrFail($id);
        $track->delete();
        return redirect('/');
    }
    
    public function ParseNewTrack(Request $request)
    {
        return view('parsetrack');
    }
    
    public function ShowNewTrack(Request $request)
    {
        $html = $request->input('html');
        return view('showtrack');
    }
}
