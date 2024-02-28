
<div class="container-fluid">
    
    <div class="mb-2">
        <a href="/mahasiswa" wire:navigate class="btn btn-outline-secondary"><i class="bi-arrow-left"></i> Kembali</a>
    </div>

    <div class="card">
        <div class="card-header">
            <p class="fw-bold fs-3 text-primary">Create</p>
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                  <label for="nimMahasiswa" class="col-sm-2 col-form-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model='nim' id="nimMahasiswa">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="namaMahasiswa" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" wire:model='nama' class="form-control" id="namaMahasiswa">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="prodiMahasiswa" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model='prodi' id="prodiMahasiswa" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamatMahasiswa"  class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea wire:model='alamat' id="alamatMahasiswa" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model='tempat_lahir' id="tempatLahir" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" wire:model='ttl' id="tanggalLahir" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahunMasuk" class="col-sm-2 col-form-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model='th_masuk' class="form-control" id="tahunMasuk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="emailMahasiswa" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" wire:model='email' id="emailMahasiswa" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fakultasId" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <select class="form-select" wire:model='fakultas_id' aria-label="Default select example">
                            <option selected>Pilih Fakultas</option>
                            @foreach ($fakultas as $item)
                                <option value={{ $item->id }}>{{ $item->nama_fakultas }}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success"> Tambah <i class="bi-plus-circle"></i></button>
                </div>
              </form>
        </div>
    </div>
</div>
