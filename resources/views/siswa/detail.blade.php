@extends('siswa.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Siswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nis: </b>{{ $siswa->nis }}</li>
                    <li class="list-group-item"><b>Nama: </b>{{ $siswa->nama }}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{ $siswa->kelas }}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{ $siswa->jurusan }}</li>
                </ul>
            </div>
            <a href="{{ route('siswa.index') }}" class="btn btn-success mt-3">Kembali</a>
            
        </div>
    </div>
</div>