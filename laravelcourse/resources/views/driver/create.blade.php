@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="text-center">
        <h1>Register as a driver to start your journey</h1>

        <div class="">
            <a href="{{ route('driver.index') }}">Go back</a>
        </div>

        <div class="w-50 mx-auto">
            <form method="POST" action="{{ route('driver.save') }}">
                @csrf
                <input type="text" class="form-control mb-2" placeholder="Enter name" name="name"
                    value="{{ old('name') }}" required />
                <input type="number" class="form-control mb-2" placeholder="Enter nitrogen level" name="nitrogen_level"
                    value="{{ old('nitrogen_level') }}" required />
                <select class="form-select" aria-label="Default select example" name="origin_city" required>
                    <option selected>Select an origin city</option>
                    <option value="TOKYO">TOKYO</option>
                    <option value="LA">LA</option>
                </select>
                <input type="submit" class="btn btn-primary" value="Send" class="mt-4" />
            </form>
        </div>
    </div>
@endsection
