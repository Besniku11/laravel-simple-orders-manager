@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Orders List</div>
                <div class="card-body">
                    @if (count($orders) > 0)
                      <a href="{{route('orders.create')}}" class="btn btn-primary mb-3">Add New Order</a>
                      @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                      @endif
                      
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Title</td>
                            <td>Descripton</td>
                            <td>Created Date</td>
                            <td>Actions</td>
                          </tr>
                        </thead>                      
                        <tbody>
                        @foreach ($orders as $order)
                            <tr>
                              <td>{{ $order -> title }}</td>
                              <td>{{ $order -> description }}</td>
                              <td>{{ $order -> created_at ->format('d-m-Y') }}</td>
                              <td>

                               <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                                <a href="{{route('orders.edit', $order -> id)}}" class="btn btn-primary">Edit</a>               
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalDelete">Delete</button>               
                                @csrf
                                @method('DELETE')
                                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to delele order?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form>
                              </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                      <p>No Orders Found</p>
                      <a href="{{route('orders.create')}}" class="btn btn-primary">Add First One</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
  </div>    
@endsection