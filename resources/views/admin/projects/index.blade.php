@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                <td scope="row">{{$project->name}}</td>
                <td><a href="{{$project->link}}">{{$project->link}}</a></td>
                <td><a href="">Details</a> <a href="">Delete</a></td>
                </tr>   
            @endforeach        
        </tbody>
    </table>    
</div>

    
@endsection