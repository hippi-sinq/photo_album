@extends('layouts.app)
@section('content')
    <ul>
        @foreach($catefories as $category)
            <li>{{$category->name}}</li>
            @endforeach
    </ul>
@endsection
