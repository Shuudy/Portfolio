<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Realisation;
use Livewire\WithPagination;

class PaginationRealisationsTable extends Component
{
    use WithPagination;

    public function render()
    {
        $realisations = Realisation::paginate(10);
        return view('livewire.pagination-realisations-table', ['realisations' => $realisations]);
    }
}