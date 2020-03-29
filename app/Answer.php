<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public static function booted(){
        static::created(function($answer){
            $answer->question->increment('answers_count');
            $answer->question->save();
        });
    }
}
