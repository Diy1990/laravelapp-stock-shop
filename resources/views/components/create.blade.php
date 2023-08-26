
@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        Add Article
    </div>
    <div class="card-body">
        <form action="{{ url('articles') }}" method="POST"> 
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
      
            <label for="description" class="form-label">Description</label>
            <input type="text" id="description" name="description" class="form-control" required>
            
            <label for="price" class="form-label">Price</label>
            <input type="text" id="price" name="price" class="form-control" required>
          
            <label for="stock" class="form-label">Stock</label>
            <input type="text" id="stock" name="stock" class="form-control" required>
          
            <button class="btn btn-primary">Add Article</button>
       </form>
    </div>
</div>

@stop
    
