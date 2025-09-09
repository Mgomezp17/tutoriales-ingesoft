@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="text-center">
        Driver {{ $viewData['driver_name'] }} created successfully with a origin city of
        {{ $viewData['driver_origin_city'] }} and a nitrogen level of {{ $viewData['driver_nitrogen_level'] }}.
    </div>
@endsection
