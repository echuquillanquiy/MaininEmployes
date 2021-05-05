<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Trabajo;

class Search extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty()
    {
        return Trabajo::where('titulo', 'LIKE', '%' . $this->search . '%')
            ->where('estado', 1)
            ->take(8)
            ->get();
    }
}
