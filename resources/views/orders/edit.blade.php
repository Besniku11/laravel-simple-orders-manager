@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Order</div>
                <div class="card-body">
                <form method="POST" action="{{route('orders.update', $order -> id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $order -> title}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description" rows="4">{{ $order -> description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>    
@endsection