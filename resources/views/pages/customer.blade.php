@extends('layout.masterdefault')
@section('title', 'Customer Page')
@section('content')
    <h1>Customer Page</h1>
    <p>This is the customer page content.</p>
    {!!Form::open(['url' => '/customer', 'method' => 'post'])!!}
    @csrf
    <div class="mb-3">
        {!! Form::label('name', 'Full Name:', ['class' => 'form-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your name']) !!}
    </div>
    <div class="mb-3">  
        {!! Form::label('email', 'Email:', ['class' => 'form-label']) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
    </div>
    <div class="mb-3">  
        {!! Form::label('phone', 'Phone:', ['class' => 'form-label']) !!}
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter your phone number']) !!}    
    </div>
    <div class="mb-3">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}    
    </div>
    {!! Form::close() !!}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @stop