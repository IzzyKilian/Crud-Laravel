@extends('layouts.app')

@section('body')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="mb-4">Add Data</h1>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mahasiswa">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Prodi">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
