<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ProcurementFund extends Model
{
    protected $fillable = [
        'procurement_id',
        'sourceOfFunds',
        'estimatedBudgetTotal',
        'estimatedBudgetMode',
        'estimatedBudgetCO',
        'remarks'
    ];


    public function procurement(): BelongsTo
    {
        return $this->belongsTo(Procurement::class);
    }
}
