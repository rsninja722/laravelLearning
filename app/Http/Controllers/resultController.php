<?php

namespace App\Http\Controllers;

use App\Models\OilChangeFormEntry;

class resultController extends Controller
{
    public function showResult($id)
    {
        $entry = OilChangeFormEntry::find($id);
        return view('result', ['entry' => $entry]);
    }
}