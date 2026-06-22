<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OilChangeFormEntry;

class checkController extends Controller
{
    public function submitEntry(Request $request)
    {
        // make sure all fields exist
        $request->validate([
            'previousOdometer' => ['required', 'numeric', 'integer'],
            // current odometer is greater than or equal to previous odometer
            'odometerCurrent' => ['required', 'numeric', 'integer', 'gte:previousOdometer'],
            // previous oil change is valid and in the past
            'previousOilChangeDate' => ['required', 'date', 'before:today'],
        ]);

        // get inputs
        $odometerCurrent = $request->input('odometerCurrent');
        $previousOilChangeDate = $request->input('previousOilChangeDate');
        $previousOdometer = $request->input('previousOdometer');

        // save entry to datebase 
        $oilChangeEntry = new OilChangeFormEntry();

        $oilChangeEntry->current_odometer = $odometerCurrent;
        $oilChangeEntry->previous_odometer = $previousOdometer;
        $oilChangeEntry->prev_change_date = $previousOilChangeDate;
        
        $oilChangeEntry->save();

        // redirect to result page with the entry id
        $entryId = $oilChangeEntry->getKey();

        return redirect()->route('result', ['id' => $entryId]);
    }
}