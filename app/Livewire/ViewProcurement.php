<?php

namespace App\Livewire;

use App\Models\Procurement;
use Livewire\Component;

class ViewProcurement extends Component
{
    public Procurement $procurement;

    public function mount(Procurement $procurement){
        $this->procurement = $procurement;
    }

    public function render()
    {
        return view('livewire.view-procurement');
    }
}
