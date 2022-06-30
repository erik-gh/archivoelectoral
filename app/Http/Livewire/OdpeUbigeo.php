<?php

namespace App\Http\Livewire;

use App\Models\Odpe;
use App\Models\Ubigeo;
use Livewire\Component;

class OdpeUbigeo extends Component
{
    public $ubigeo;
    public $odpe;
    public $ubigeos = [];
    public $odpes = [];

    public function mount(){
        $this->odpes = Odpe::all();
        $this->ubigeos = collect();
    }

    public function updatedOdpe($value){
        $this->odpes = Ubigeo::where('id_odpe', $value)->get();
        $this->odpe = $this->odpes->first()->id ?? null;
    }
    public function render()
    {
        return view('livewire.odpe_ubigeo');
    }
}
