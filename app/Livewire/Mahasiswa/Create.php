<?php

namespace App\Livewire\Mahasiswa;

use App\Models\Fakultas;
use Livewire\Component;

class Create extends Component
{
    
    public function render()
    {
        return view('livewire.mahasiswa.create',['fakultas'=>Fakultas::all()]);
    }
}
