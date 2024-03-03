
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ad optio dignissimos sint perspiciatis, quod commodi dicta quae, doloribus accusantium quia, dolorem natus error nam modi culpa placeat cupiditate unde.
    </p>

    <div class="mb-2">
        <a href="/mahasiswa/forms" wire:navigate class="btn btn-success"><i class="bi-plus"></i> Tambah Data</a>
    </div>
    <div class="mb-2">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
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
                                    <a href="/mahasiswa/forms/{{ $item->uuid }}" wire:navigate class="btn btn-sm btn-success m-1"><i class="bi-pencil-square"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm m-1" onclick="delModal('{{ $item->uuid }}')" data-bs-toggle="modal" data-bs-target="#deleteModal" >
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
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel"><i class="bi-info-circle"></i> Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p class="fw-bold">Apakah Anda yakin ingin menghapus data ini?</p>
                  
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="" wire:navigate id="delId" class="btn btn-danger">Hapus <i class="bi-trash-fill"></i></a>
              </div>
          </div>
        </div>
      </div>
</div>

