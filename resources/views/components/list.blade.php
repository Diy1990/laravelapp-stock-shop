
@extends('layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Actions</th>
  </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
            <tr>
                <td scop="row">{{ $article->name }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->price }}</td>
                <td>{{ $article->stock }}</td>
                <td><a href="{{url('articles/'.$article->id)}}" class="btn btn-warning">Edit </a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{url('/articles/create')}}" class="btn btn-success">  Add Article </a>
@stop