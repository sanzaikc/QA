@extends('layouts.app')

<div class="col-12">
    @include('answers._ansInput', [
        'title' => 'Edit Answer', 
        'btnTxt' => 'Update Answer', 
        'route' => 'questions.answers.update', 
        'para' => [ $question, $answer], 
        'method'=> 'PATCH'])
</div>
