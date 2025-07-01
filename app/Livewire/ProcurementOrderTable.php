<?php

namespace App\Livewire;

use Livewire\Component;

class ProcurementOrderTable extends Component
{
    public function render()
    {
        return view('livewire.procurement-order-table', ['procurements' => []]);
    }
}
