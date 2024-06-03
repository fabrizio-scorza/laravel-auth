@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="title pb-5">{{$project->name}}</h2>    
    <p>
        {{$project->description}}
    </p>
    <a href="{$project->link}}">{{$project->link}}</a>
</div>
    
@endsection