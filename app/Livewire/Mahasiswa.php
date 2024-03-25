<?php

namespace App\Livewire;

use App\Models\Mahasiswa as  ModelsMahasiswa;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Component
{

    public $search = "";

    #[Validate]
    public  $uuid= "";
    
    protected $rules = [ 
        'uuid' => 'required', 
    ];
    public function render()
    {
       $this->search == "" ?  $mahasiswas = ModelsMahasiswa::paginate(10) : $mahasiswas = ModelsMahasiswa::where('nama','like',"%".$this->search."%")->get();
        return view('livewire.mahasiswa',['mahasiswa'=>$mahasiswas]);
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
