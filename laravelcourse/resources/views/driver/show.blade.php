@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="text-center">
        <h1>List of drivers</h1>

        <div class="">
            <a href="{{ route('driver.index') }}">Go back</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Origin City</th>
                        <th>Nitrogen Level</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['drivers'] as $driver)
                        <tr>
                            <td>{{ $driver->getId() }}</td>
                            <td @if ($driver->getOriginCity() !== 'TOKYO') class="text-primary" @endif>{{ $driver->getName() }}</td>
                            <td>
                                {{ $driver->getOriginCity() }}
                                @if ($driver->getOriginCity() === 'TOKYO')
                                    <span class="badge bg-warning text-dark ms-2">Reto tokio</span>
                                @endif
                            </td>
                            <td>{{ $driver->getNitrogenLevel() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
