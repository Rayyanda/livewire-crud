<?php

namespace App\Livewire\Mahasiswa;

use App\Models\Fakultas;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;

class Update extends Component
{
    #[Validate]
    public  $uuid, $nim, $nama, $prodi, $alamat, $ttl, $th_masuk, $email, $fakultas_id, $tempat_lahir = '';

    protected $rules = [
        
        'nim' => 'required',
        'nama' => 'required',
        'prodi' => 'required',
        'alamat' => 'required',
        'ttl' => 'required',
        'th_masuk' => 'required',
        'email' => 'required|email',
        'fakultas_id' => 'required',
        'tempat_lahir' => 'required'
    ];
    public function mount($uuid)
    {
        $mhs =  DB::table('mahasiswa')->where('uuid',$uuid)->first();
        $this->uuid = $mhs->uuid;
        $this->nim = $mhs->nim;
        $this->nama= $mhs->nama;
        $this->prodi = $mhs->prodi;
        $this->alamat = $mhs->alamat;
        $this->ttl = $mhs-> ttl;
        $this->th_masuk = $mhs-> th_masuk;
        $this->email = $mhs-> email;
        $this->fakultas_id = $mhs -> fakultas_id;
        $this->tempat_lahir = $mhs->tempat_lahir;
    }

    public function render()
    {
        return view('livewire.mahasiswa.update',['fakultas'=>Fakultas::all()]);
    }

    public function update()
    {
        //validasi sebelum simpan
        $this->validate();
        //simpan ke database
        DB::table( 'mahasiswa')
            ->where('uuid', $this->uuid)
            ->update([
                'nim'=> $this-> nim,
                'nama'=> $this-> nama,
                'prodi'=> $this-> prodi,
                'alamat'=> $this-> alamat,
                'ttl'=> $this-> ttl,
                'th_masuk'=> $this-> th_masuk,
                'email'=> $this-> email,
                'fakultas_id'=> $this-> fakultas_id,
                'tempat_lahir'=> $this-> tempat_lahir
            ]);

        session()->flash('message','Data Mahasiswa Berhasil Di Update');
        return redirect('/mahasiswa');
    }
}
