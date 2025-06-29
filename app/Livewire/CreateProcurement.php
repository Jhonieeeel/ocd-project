<?php

namespace App\Livewire;

use App\Models\Procurement;
use Livewire\Component;
use Livewire\WithFileUploads;
use League\Csv\Reader;
use League\Csv\Statement;
use Illuminate\Support\Facades\DB;

class CreateProcurement extends Component
{

    use WithFileUploads;

    // csv
    public $csv; 

    // procurement Info
    public $codePap;
    public $procurementName;
    public $earlyProcurement;
    public $modeProcurement;
    public $pmoEndUser;

    // procurement Milestone
    public $advertisementPosting;
    public $submissionOpening;
    public $noticeOfAward;
    public $contractSigning;

    // procurement Funds
    public $sourceOfFunds;
    public $estimatedBudgetTotal;
    public $estimatedBudgetMode;
    public $estimatedBudgetCO;
    public $remarks;

    // procurement Request

    // procurement Order

    public function save() {
        $this->validate([
            'csv' => 'required|file|mimes:csv,txt|max:2048',
        ]);

        $tempPath = $this->csv->storeAs('temp', $this->csv->getClientOriginalName(), 'public');
        $filePath = storage_path('app/public/' . $tempPath);

        $reader = Reader::createFromPath($filePath, 'r');

        $allRecords = iterator_to_array($reader->getRecords());
        $totalRows = count($allRecords);

        $reader = Reader::createFromPath($filePath, 'r');

        $chunkSize = 50000;
        $chunks = ceil($totalRows / $chunkSize);

        for ($i = 0; $i < $chunks; $i++) {
            $statement = (new Statement())
                ->offset($i * $chunkSize)
                ->limit($chunkSize);

            $records = $statement->process($reader);

            $rows = iterator_to_array($records);

            DB::transaction(function () use ($rows) {
                foreach($rows as $row) {
                
                    $procurement = Procurement::create([
                        'codePap' => $row[0],  
                        'procurementName' => $row[1],  
                        'pmoEndUser' => $row[2],
                        'earlyProcurement' => strtolower($row[3] ?? '') === 'yes', 
                        'modeProcurement' => $row[4],  
                    ]);
    
                    $procurement->milestone()->create([
                        'advertisementPosting' => $row[5],
                        'submissionOpening' => $row[6],
                        'noticeOfAward' => $row[7],
                        'contractSigning' => $row[8],
                    ]);
    
                    $procurement->fund()->create([
                        'sourceOfFunds'        => $row[9] ?? '',
                        'estimatedBudgetTotal' => floatval(str_replace(',', '', $row[10] ?? 0)),
                        'estimatedBudgetMode'  => floatval(str_replace(',', '', $row[11] ?? 0)),
                        'estimatedBudgetCO'    => floatval(str_replace(',', '', $row[12] ?? 0)),
                        'remarks'              => $row[13] ?? '',
                    ]);
    
                }
            });

            
            
        }

        session()->flash('success', 'CSV uploaded successfully!');
    }


    public function processChunk() {

    }
    
    public function render()
    {
        return view('livewire.create-procurement',[
            'procurements' => Procurement::all()
        ]);
    }
}
