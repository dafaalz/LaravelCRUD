@extends('siswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left-mt-2">
            <h2>REKAYASA PERANGKAT LUNAK - SMK PGRI 3 MALANG</h2>
        </div>
        <div class="float-right-my-2">
            <a class="btn btn-success" href="{{ route('siswa.create') }}">Input siswa</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if($message = Session::get('error'))
<div class="alert alert-error">
    <p>{{ $message }}</p>
</div>
@endif



<table class="table table-bordered">
    <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($siswa as $sw) <tr>
        <td>{{ $sw->nis }}</td>
        <td>{{ $sw->nama }}</td>
        <td>{{ $sw->kelas }}</td>
        <td>{{ $sw->jurusan }}</td>
        <td>
            <form action="{{ route('siswa.destroy', ['siswa'=>$sw->nis]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('siswa.show', ['siswa'=>$sw->nis]) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('siswa.edit', ['siswa'=>$sw->nis]) }}">Edit</a> @csrf 
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection