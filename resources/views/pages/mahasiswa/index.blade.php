@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Add Data</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($mahasiswa->count() > 0)
                @foreach($mahasiswa as $mahasiswa)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $mahasiswa->nama }}</td>
                        <td class="align-middle">{{ $mahasiswa->nim }}</td>
                        <td class="align-middle">{{ $mahasiswa->prodi }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('mahasiswa.edit', $mahasiswa->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else 
                <tr>
                    <td class="text-center" colspan="5">Tidak ada daftar mahasiswa!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection