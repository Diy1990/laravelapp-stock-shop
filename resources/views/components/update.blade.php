
@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        Update Article
    </div>
    <div class="card-body">
        <form action="{{ url('articles/'.$data->id)}}" method="POST"> 
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}" required>
      
            <label for="description" class="form-label">Description</label>
            <input type="text" id="description" name="description" class="form-control" value="{{$data->description}}" required>
            
            <label for="price" class="form-label">Price</label>
            <input type="text" id="price" name="price" class="form-control" value="{{$data->price}}" required>
          
            <label for="stock" class="form-label">Stock</label>
            <input type="text" id="stock" name="stock" class="form-control" value="{{$data->stock}}" required>
          
            <button class="btn btn-primary">Update Article</button>
       </form>
    </div>
</div>

@stop
    