
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="mb-2">
        <a href="/mahasiswa/forms" wire:navigate class="btn btn-success"><i class="bi-plus"></i> Tambah Data</a>
        <a href="#" wire:navigate class="btn btn-primary"><i class="bi-pencil-square"></i> Edit Data</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered border-secondary" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center" >
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Tahun Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($mahasiswa as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->th_masuk }}</td>
                                <td>
                                    <a href="#" class="btn btn-danger" onclick="delModal('{{ $item->uuid }}')" data-bs-toggle="modal" data-bs-target="#deleteModal" >
                                        <i class="bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{ $mahasiswa->links() }}
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form wire:submit='delMhs'>
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="deleteModalLabel"><i class="bi-info-circle"></i> Info</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">Apakah Anda yakin ingin menghapus data ini?</p>
                    <input type="text" wire:model='uuid' id="delId" class="form-control">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>

