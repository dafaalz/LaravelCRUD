@extends('siswa.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br><ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('siswa.store') }}" method="post" id="myForm" > @csrf <div class="form-group">
                    <label for="Nis">Nis</label>
                    <input type="text" name="nis" class="form-control" id="Nis" aria-describedby="Nis">
                </div>
                 <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="Nama">
                </div>
                 <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="Kelas" aria-describedby="password">
                </div>
                 <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection