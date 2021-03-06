<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['id', 'title','user_id', 'top_track_id', 'number', 'artist', 'genre', 'bpm', 'key', 'cover', 'release', 'preview', 'label', 'remixer'];
    
    public function by(User $user) {
            $this->user_id = $user->id;
        }
    
    public function user() {
            return $this->belongsTo(User::class);
        }
        
    public function TopTrack() {
        return $this->belongsTo(TopTracks::class);
    }
}