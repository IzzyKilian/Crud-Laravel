@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="nama" value="{{ $mahasiswa->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" placeholder="nim" value="{{ $mahasiswa->author }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" placeholder="prodi" value="{{ $mahasiswa->year }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection