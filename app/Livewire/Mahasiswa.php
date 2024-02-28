<?php

namespace App\Livewire;

use App\Models\Mahasiswa as  ModelsMahasiswa;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Mahasiswa extends Component
{

    #[Validate]
    public  $nama, $nim, $prodi = "";
    
    protected $rules = [ 
        'nama' => 'required', 
        'nim' => 'required',
        'prodi' => 'required'
    ];
    public function render()
    {
       
        return view('livewire.mahasiswa',['mahasiswa'=>ModelsMahasiswa::paginate(10)]);
    }
}
