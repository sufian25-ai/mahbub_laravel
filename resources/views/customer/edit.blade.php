@extends('master')
@section('title', 'Customer edit')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Customer</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address', $customer->address) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="profile_image" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*">
                                @if ($customer->profile_image)      
                                    <img src="{{ asset($customer->profile_image) }}" alt="Profile Image" width="100" height="100" class="mt-2">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>

                            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back to List</a>
                        </form> 
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
