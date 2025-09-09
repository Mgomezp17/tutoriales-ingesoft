@extends('layouts.app')
@section('title', 'Drivers Page')
@section('content')
    <div class="text-center">
        <h1>Welcome to the drivers page</h1>

        <div class="">
            <a href="{{ route('driver.create') }}" class="btn btn-primary">Create Driver</a>
            <a href="{{ route('driver.show') }}" class="btn btn-primary">List Drivers</a>
            <a href="{{ route('driver.statistics') }}" class="btn btn-primary">Driver Statistics</a>
        </div>
    </div>
@endsection
