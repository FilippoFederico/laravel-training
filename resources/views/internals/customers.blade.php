@extends('layout')

@section('content')

<h1>Customers</h1>
    
<form action="customers" method="POST" class="pb-5">
    <p>Name:</p>
    <div class="input-group">
    <!-- to hold the value if the other ones is not filled > value="{{ old('name') }}" -->
        <input type="text" name="name" value="{{ old('name') }}" class="mr-2">
        <div>{{ $errors->first('name') }}</div>
    </div>
    
    <p>Email:</p>
    <div class="input-group">
        <input type="text" name="email" value="{{ old('email') }}" class="mr-2">
        <div>{{ $errors->first('email') }}</div>
    </div>

    <button type="submit">Add Customer</button>

    @csrf

</form>

<ul>
<!-- from array in routes > web.php -->
    @foreach ($customers as $customer)
        <li>{{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span></li>
    @endforeach
</ul>

@endsection