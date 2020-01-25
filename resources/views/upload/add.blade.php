@extends('layouts.app)
@section('content')
    <form action="{{route('category_store')}}"method="post" enctype="multipart/form-data">
        @csrf
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}}</option>
                @endforeach
        </select>
        <input type="text" name="image"/>
        <input type="submit" value="Upload"/>
    </form>
@endsection
