<?php

namespace App\Livewire;

use App\Models\Procurement;
use Livewire\Component;
use Livewire\WithPagination;

class ProcurementTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.procurement-table',[
            "procurements" => Procurement::paginate(5)
        ]);
    }
}
