<?php

namespace App\Livewire;

use Livewire\Component;

class DynamicTable extends Component
{
    public $headers = ['Name', 'Email', 'Created At'];
    public $data = [
        ['Alice', 'alice@example.com', '2025-07-01'],
        ['Bob', 'bob@example.com', '2025-06-25'],
        ['Charlie', 'charlie@example.com', '2025-06-30'],
          ];
    public function render()
    {
        return view('livewire.dynamic-table');
    }
}
