<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['body', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function getUrlAttribute(){
        return $this->id;
    }
    
    public function getHtmlBodyAttribute(){
        return \Parsedown::instance()->text($this->body);
    }

    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }

    public static function booted(){
        static::created(function($answer){
            $answer->question->increment('answers_count');
        });

        static::deleted(function($answer){
            $answer->question->decrement('answers_count');
        });
    }
}
