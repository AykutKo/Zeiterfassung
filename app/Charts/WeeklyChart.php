<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Zeiterfassung;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class WeeklyChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $labels = [];
        $labelEntries = [];

        foreach (Zeiterfassung::all()->whereNotNull('startDate')->whereNotNull('endDate')->whereBetween('startDate', [now()->startOfWeek(), now()->endOfWeek()])->groupBy('taetigkeit') as $key => $value)
        {
            $labels[] = $key;
            $totalTime = 0;

            foreach ($value as $entry)
            {
                $totalTime += $entry->startDate->diffInMinutes($entry->endDate);
            }

            $totalTime /= count($value);

            $labelEntries[] = $totalTime;
        }

        return Chartisan::build()
            ->labels($labels)
            ->dataset('Stunden', $labelEntries);
    }
}
