<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="mb-2">
        <a href="/mahasiswa/create" wire:navigate class="btn btn-success"><i class="bi-plus"></i> Tambah Data</a>
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
                                    <a href="#" class="btn btn-danger"><i class="bi-trash-fill"></i></a>
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

</div>

