@extends('layout')
<!-- to change title page -->
@section('title', 'Customer List')
    
@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="customers" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
            <!-- to hold the value if the other ones is not filled > value="{{ old('name') }}" -->
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                <div>{{ $errors->first('name') }}</div>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                <div>{{ $errors->first('email') }}</div>
            </div>

            <button type="submit" class="btn btn-primary">Add Customer</button>

        @csrf

        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <ul>
    <!-- from array in routes > web.php -->
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span></li>
        @endforeach
        </ul>
    </div>
</div>


@endsection