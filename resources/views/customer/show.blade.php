@extends('master')
@section('title', 'Customer Details')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <td>{{ $customer->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $customer->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $customer->address }}</td>
                            </tr>
                            <tr>
                                <th>Profile Image</th>
                                <td>
                                    @if ($customer->profile_image)
                                        <img src="{{ asset($customer->profile_image) }}" alt="Profile Image" width="100" height="100">
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

