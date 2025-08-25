@extends('master')
@section('title', 'Customer List')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Customer List</h4>
                        <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Profile Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                         <td>
                                            @if ($item->profile_image)
                                                <img src="{{ asset($item->profile_image) }}" alt="Profile Image"  class="rounded-circle" width="70" height="60">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                       
                                        <td>
                                            <a href="{{ route('customer.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('customer.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('customer.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $customer->links()
                        }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
