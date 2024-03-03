<?php

namespace App\Livewire\Mahasiswa;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    // 'uuid',
    //     'nim',
    //     'nama',
    //     'prodi',
    //     'alamat',
    //     'ttl',
    //     'th_masuk',
    //     'email',
    //     'fakultas_id',
    //     'tempat_lahir',
    #[Validate]
    public  $nim, $nama, $prodi, $alamat, $ttl, $th_masuk, $email, $fakultas_id, $tempat_lahir = '';

    protected $rules = [
        
        'nim' => 'required|unique:mahasiswa',
        'nama' => 'required|min:3',
        'prodi' => 'required',
        'alamat' => 'required|max:255',
        'ttl' => 'required|date',
        'th_masuk' => 'required|numeric',
        'email' => 'required|email|unique:mahasiswa',
        'fakultas_id' => 'required',
        'tempat_lahir' => 'required'
    ];
    
    public function render()
    {
        return view('livewire.mahasiswa.create',['fakultas'=>Fakultas::all()]);
    }

    public function store()
    {
        
       $this->validate();
        //dd($validated);
       
        //Mahasiswa::create([$validated])->save();
        DB::table('mahasiswa')->insert([
            'uuid'=> Str::uuid(),
            'nim' => $this->nim,
            'nama' => $this->nama,
            'prodi' => $this->prodi,
            'alamat' => $this->alamat,
            'ttl' => $this->ttl,
            'th_masuk' => $this->th_masuk,
            'email' => $this->email,
            'fakultas_id' => $this->fakultas_id,
            'tempat_lahir'=>$this->tempat_lahir
        ]);
        $this->reset();
        session()->flash('message','Data Mahasiswa Berhasil Di tambahkan');
        return redirect()->to('/mahasiswa');
    }
}
