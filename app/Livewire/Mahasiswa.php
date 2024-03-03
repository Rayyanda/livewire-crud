<?php

namespace App\Livewire;

use App\Models\Mahasiswa as  ModelsMahasiswa;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Component
{

    #[Validate]
    public  $uuid= "";
    
    protected $rules = [ 
        'uuid' => 'required', 
    ];
    public function render()
    {
       
        return view('livewire.mahasiswa',['mahasiswa'=>ModelsMahasiswa::paginate(10)]);
    }

    public function delMhs($uuid)
    {
        DB::table('mahasiswa')->where('uuid','=',$uuid)->delete();
        session()->flash('message','Data berhasil dihapus');
        return redirect()->to('/mahasiswa');
    }

    public function editForms($uuid)
    {
        return view();
    }

}
