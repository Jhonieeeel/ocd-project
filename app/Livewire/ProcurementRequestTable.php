<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ProcurementRequestTable extends Component
{
    
    use WithPagination;
    

    public function render()
    {
        return view('livewire.procurement-request-table', ['procurementsRequest' => []]);
    }
}
