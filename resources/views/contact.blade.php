@extends('master')
@section('title', 'Contact Page')
@section('content')

    <h1>Welcome to Contact Laravel Page!</h1>
    <p>This is your first Blade view From Child Component.</p>

    <p>If you have any questions, feel free to reach out to us via the contact form below.</p>

    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection