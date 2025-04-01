<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetTemperatureController extends Controller
{
    private $planets = [
        ["name" => "Mercury", "temperature" => 167],
        ["name" => "Venus", "temperature" => 464],
        ["name" => "Earth", "temperature" => 15],
        ["name" => "Mars", "temperature" => -65],
        ["name" => "Jupiter", "temperature" => -108],
        ["name" => "Saturn", "temperature" => -139],
        ["name" => "Uranus", "temperature" => -195],
        ["name" => "Neptune", "temperature" => -200]
    ];

    public function index($unit = 'celsius')
    {
        $planets = array_map(function ($planet) use ($unit) {
            return [
                'name' => $planet['name'],
                'temperature' => $unit === 'fahrenheit'
                    ? round(($planet['temperature'] * 9/5) + 32, 1) // Celsius to Fahrenheit
                    : $planet['temperature']
            ];
        }, $this->planets);

        return view('planet-temperatures', [
            'planets' => $planets,
            'unit' => $unit
        ]);
    }
}
