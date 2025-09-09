@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Driver Statistics</h1>

        <!-- Summary Cards -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Drivers</h5>
                        <h2 class="card-text">{{ $viewData['total_drivers'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">From Tokyo</h5>
                        <h2 class="card-text">{{ $viewData['drivers_from_tokyo'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">From LA</h5>
                        <h2 class="card-text">{{ $viewData['drivers_from_la'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body text-center">
                        <h5 class="card-title">Average Nitrogen</h5>
                        <h2 class="card-text">{{ number_format($viewData['average_nitrogen_level'], 1) }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nitrogen Level Statistics -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Nitrogen Level Range</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-6">
                                <h6 class="text-success">Highest Level</h6>
                                <h3 class="text-success">{{ $viewData['highest_nitrogen_level'] }}</h3>
                            </div>
                            <div class="col-6">
                                <h6 class="text-danger">Lowest Level</h6>
                                <h3 class="text-danger">{{ $viewData['lowest_nitrogen_level'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">City Distribution</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="progress mb-2" style="height: 20px;">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ $viewData['total_drivers'] > 0 ? ($viewData['drivers_from_tokyo'] / $viewData['total_drivers']) * 100 : 0 }}%">
                                        {{ $viewData['total_drivers'] > 0 ? round(($viewData['drivers_from_tokyo'] / $viewData['total_drivers']) * 100, 1) : 0 }}%
                                    </div>
                                </div>
                                <small class="text-muted">Tokyo</small>
                            </div>
                            <div class="col-6">
                                <div class="progress mb-2" style="height: 20px;">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $viewData['total_drivers'] > 0 ? ($viewData['drivers_from_la'] / $viewData['total_drivers']) * 100 : 0 }}%">
                                        {{ $viewData['total_drivers'] > 0 ? round(($viewData['drivers_from_la'] / $viewData['total_drivers']) * 100, 1) : 0 }}%
                                    </div>
                                </div>
                                <small class="text-muted">LA</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="text-center mt-4">
            <a href="{{ route('driver.index') }}" class="btn btn-primary">Back to Drivers</a>
            <a href="{{ route('driver.show') }}" class="btn btn-secondary">View All Drivers</a>
        </div>
    </div>
@endsection
