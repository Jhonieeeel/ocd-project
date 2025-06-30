<?php

namespace App\Livewire;

use App\Models\Procurement;
use Livewire\Component;

class SearchInput extends Component
{

    public $search = "";


    public function render()
    {
        return view('livewire.search-input');
    }
}
