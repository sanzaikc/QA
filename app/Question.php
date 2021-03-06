<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function getUrlAttribute(){
        return route("questions.show", $this->slug );
    }

    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute(){
        if($this->answers_count > 0){
            if($this->bestAnswerId){
                return "answer-accepted";
            }
            return "answered";
        }
        else{
            return "unanswered";
        }
    }

    public function getHtmlBodyAttribute(){
        return \Parsedown::instance()->text($this->body);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
