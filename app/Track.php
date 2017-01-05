<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['title','user_id', 'number','top100', 'artist', 'genre', 'bpm', 'key', 'cover', 'release', 'preview', 'label', 'remixer'];
    
    public function by(User $user) {
            $this->user_id = $user->id;
        }
    
    public function user() {
            return $this->belongsTo(User::class);
        }
}
