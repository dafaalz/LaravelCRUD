@extends('siswa.layout')

@section('content')

<div class="container mt-5">

    <div class="row jsutify-content-center align-items-center">
        <div class="card" style="width: 24 rem;">
            <div class="card-header">
                Edit Siswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input. <br><br><ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('siswa.update', $siswa->nis) }}" id="myForm" method="post"> @csrf 
                    @method('PUT')
                    <div class="form-group">
                        <label for="Nis">Nis</label>
                        <input type="text" name="nis" id="Nis" class="form-control" value="{{ $siswa->nis }}" aria-describedby="Nis">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="nama" id="Nama" class="form-control" value="{{ $siswa->nama }}" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <input type="text" name="kelas" id="Kelas" class="form-control" value="{{ $siswa->kelas }}" aria-describedby="Kelas">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <input type="text" name="jurusan" id="Jurusan" class="form-control" value="{{ $siswa->jurusan }}" aria-describedby="Jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection