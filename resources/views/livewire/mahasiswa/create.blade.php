
<div class="container-fluid">
    
    <div class="mb-2">
        <a href="/mahasiswa" wire:navigate class="btn btn-outline-secondary"><i class="bi-arrow-left"></i> Kembali</a>
    </div>

    <div class="card">
        <div class="card-header">
            <p class="fw-bold fs-3 text-primary">Create</p>
        </div>
        <div class="card-body">
            <form wire:submit='store' >
                <div class="row mb-3">
                  <label for="nimMahasiswa" class="col-sm-2 col-form-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" class="@error('nim') is-invalid @else is-valid @enderror form-control" wire:model.blur='nim' id="nimMahasiswa">
                    @error('nim') <span class="error fs-6 text-danger">{{ $message }} </span> @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="namaMahasiswa" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" wire:model='nama' class="form-control" id="namaMahasiswa">
                    @error('nama') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="fakultasId" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <select class="form-select"  wire:model.live='fakultas_id' aria-label="Default select example">
                            <option selected>Pilih Fakultas</option>
                            @foreach ($fakultas as $item)
                                <option value={{ $item->id }}>{{ $item->nama_fakultas }}</option>
                            @endforeach
                          </select>
                          @error('fakultas_id') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prodiMahasiswa" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model.blur='prodi' id="prodiMahasiswa" class="@error('prodi') is-invalid @enderror form-control">
                        @error('prodi') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamatMahasiswa"  class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea wire:model='alamat' id="alamatMahasiswa" cols="30" rows="2" class="form-control"></textarea>
                        @error('alamat') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model='tempat_lahir' id="tempatLahir" class="form-control">
                        @error('tempat_lahir') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" wire:model='ttl' id="tanggalLahir" class="form-control">
                        @error('ttl') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahunMasuk" class="col-sm-2 col-form-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model='th_masuk' class="form-control" id="tahunMasuk">
                        @error('th_masuk') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="emailMahasiswa" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" wire:model.blur='email' id="emailMahasiswa" class="form-control">
                        @error('email') <span class="error fs-6 text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <div class="mb-2">
                    <button type="submit" class="btn btn-success"> Tambah <i class="bi-plus-circle"></i></button>
                </div>
              </form>
        </div>
    </div>
</div>
