<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProcurementOrder extends Model
{
    public function procurement(): BelongsTo
    {
        return $this->belongsTo(Procurement::class);
    }
}
