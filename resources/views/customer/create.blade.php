@extends('master')
@section('title', 'Customer Create')
@section('content')  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Add New Customer</h4>
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
                        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="profile_image" class="form-label
">Profile Image</label>
                                <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back to List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

