<?php

namespace App\Http\Controllers;

use App\Charts\WeeklyChart;

class ChartController extends Controller
{
    public function weekly()
    {
        return view('charts.weekly');
    }

    public function monthly()
    {
        return view('charts.monthly');
    }

    public function yearly()
    {
        return view('charts.yearly');
    }
}
