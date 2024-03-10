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
        $realisations = Realisation::orderBy('updated_at', 'desc')->select('id', 'title', 'subtitle', 'created_at', 'updated_at')->paginate(10);
        return view('livewire.pagination-realisations-table', ['realisations' => $realisations]);
    }
}
