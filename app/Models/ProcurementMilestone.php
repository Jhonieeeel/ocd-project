<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProcurementMilestone extends Model
{
    protected $fillable = [
        'procurement_id',
        'advertisementPosting',
        'submissionOpening',
        'noticeOfAward',
        'contractSigning',
    ];

    public function procurement(): BelongsTo
    {
        return $this->belongsTo(Procurement::class);
    }
}
