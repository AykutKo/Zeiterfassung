<?php

namespace App\Providers;

use App\Charts\MonthlyChart;
use App\Charts\WeeklyChart;
use App\Charts\YearlyChart;
use Illuminate\Support\ServiceProvider;

use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        $charts->register([
            WeeklyChart::class,
            MonthlyChart::class,
            YearlyChart::class,
        ]);
    }
}
