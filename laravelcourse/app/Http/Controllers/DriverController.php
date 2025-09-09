<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DriverController extends Controller
{
    public function index(): View
    {
        return view('driver.index');
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create driver';
    
        return view('driver.create')->with('viewData', $viewData);
    }

    public function show(): View
    {
        $viewData = [];
        $viewData['title'] = 'Show drivers';
        $viewData['drivers'] = Driver::orderBy('nitrogen_level', 'asc')->get();
        return view('driver.show')->with('viewData', $viewData);
    }

    public function statistics(): View
    {
        $viewData = [];
        $viewData['title'] = 'Driver statistics';
        $viewData['drivers'] = Driver::all();
        $viewData['average_nitrogen_level'] = Driver::avg('nitrogen_level');
        $viewData['highest_nitrogen_level'] = Driver::max('nitrogen_level');
        $viewData['lowest_nitrogen_level'] = Driver::min('nitrogen_level');
        $viewData['total_drivers'] = Driver::count();
        $viewData['drivers_from_tokyo'] = Driver::where('origin_city', 'TOKYO')->count();
        $viewData['drivers_from_la'] = Driver::where('origin_city', 'LA')->count();
        return view('driver.statistics')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'origin_city' => 'required|in:LA,TOKYO',
            'nitrogen_level' => 'required|gte:0',
        ]);

        Driver::create($request->only(['name', 'origin_city', 'nitrogen_level']));

        $viewData = [];
        $viewData['title'] = 'Driver created successfully';
        $viewData['driver_name'] = $request->name;
        $viewData['driver_origin_city'] = $request->origin_city;
        $viewData['driver_nitrogen_level'] = $request->nitrogen_level;

        return redirect()->route('driver.show')->with('viewData', $viewData);
    }
}
