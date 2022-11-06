@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                    <h1>Tambah Data Warga</h1>

                    <form action="/warga/store" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="" placeholder="Nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="" placeholder="NIK" name="nik">
                        </div>
                        <div class="mb-3">
                            <label for="no_kk" class="form-label">NO KK</label>
                            <input type="text" class="form-control" id="" placeholder="NO KK" name="no_kk">
                        </div>

                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        </select>

                        <div class="mt-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3"></textarea>
                        </div>
                        <input class="btn btn-primary mt-3" type="submit" name="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection