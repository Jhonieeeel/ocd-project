<?php

namespace App\Livewire;

use App\Models\Procurement;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;


class ProcurementTable extends Component
{
    use WithPagination;

    #[Url] 
    public $search = "";

    public $category = "";
    public $wildCardValue = "";
    
    // modal
    public $showModal = false;
    public $procurementData;

    public function selectCategory(string $value, $wildCardValue) {
        $this->category = $value;
        $this->wildCardValue = $wildCardValue;
        $this->resetPage();
       
    }

    public function openModal($id) {
        $this->procurementData = Procurement::findOrFail($id);
    }

    public function render()
    {
        $query = Procurement::query();

        if ($this->search && $this->category) {
            $query->where($this->category, 'like', "%{$this->search}%")->paginate(5);
        }

        return view('livewire.procurement-table',[
            "procurements" => $query->paginate(5)
        ]);
    }
}
