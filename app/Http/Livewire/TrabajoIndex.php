<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Trabajo;
use App\Models\Tipo;

use Livewire\WithPagination;

class TrabajoIndex extends Component
{
    use WithPagination;
    public $tipo_id;

    public function render()
    {
        $tipos = Tipo::all();
        $trabajos = Trabajo::where('estado', 1)
            ->tipo($this->tipo_id)
            ->latest('id')
            ->paginate(8);

        return view('livewire.trabajo-index', compact('trabajos', 'tipos'));
    }

    public function resetFilters()
    {
        $this->reset(['tipo_id']);
    }
}
