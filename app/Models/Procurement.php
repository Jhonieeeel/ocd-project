<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Procurement extends Model
{

    protected $fillable = [
        'codePap',
        'procurementName',
        'earlyProcurement',
        'modeProcurement',
        'pmoEndUser'
    ];

    public function milestone(): HasOne
    {
        return $this->hasOne(ProcurementMilestone::class);
    }

    public function fund(): HasOne
    {
        return $this->hasOne(ProcurementFund::class);
    }

    public function prequest(): HasOne
    {
        return $this->hasOne(ProcurementRequest::class);
    }

    public function order(): HasOne
    {
        return $this->hasOne(ProcurementOrder::class);
    }
}
