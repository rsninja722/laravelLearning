<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['current_odometer', 'previous_odometer', 'prev_change_date'])]
class OilChangeFormEntry extends Model
{

    protected function casts(): array
    {
        return [
            'current_odometer' => 'integer',
            'previous_odometer' => 'integer',
            'prev_change_date' => 'date',
        ];
    }
}