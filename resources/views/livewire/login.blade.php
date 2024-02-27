<div class="container">
    <div class="d-flex flex-row justify-content-center align-items-center" style="height: 500px;">
        <div class="card shadow m-2" style="width: 500px" >
            <div class="card-body">
                <h4 class="card-title text-center"><i class="bi-person-fill"></i> Login</h4>
                <hr>
                <form wire:submit='login' class="form">
                    <div class="mb-2">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="text" wire:model='email' id="" class="form-control">
                        <div>
                            @error('email') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" wire:model='password' id="" class="form-control">
                        <div>
                            @error('password') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal !</strong> {{ session('error') }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="mb-2">
                        <button type="submit" class="btn btn-success" >Login <i class="bi-door-open"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
