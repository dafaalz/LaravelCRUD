<!DOCTYPE html>
<html>
<head>
    <title>Test CRUD Lagu</title>
</head>
<body>
    <h1>CRUD Lagu</h1>

    {{-- Form Tambah Lagu --}}
    <form action="{{ route('lagu.store') }}" method="POST">
        @csrf
        <input type="text" name="judul" placeholder="Judul Lagu" required>
        <input type="text" name="filename" placeholder="Filename" required>
        <input type="text" name="artis" placeholder="Artis" required>
        <input type="text" name="album" placeholder="Album">
        <input type="text" name="cover_album" placeholder="Cover Album">
        <button type="submit">Tambah</button>
    </form>

    <hr>

    {{-- List Lagu --}}
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Artis</th>
            <th>Album</th>
            <th>Aksi</th>
        </tr>
        @foreach ($lagus as $lagu)
        <tr>
            <td>{{ $lagu->id_lagu }}</td>
            <td>{{ $lagu->judul }}</td>
            <td>{{ $lagu->artis }}</td>
            <td>{{ $lagu->album }}</td>
            <td>
                {{-- Update (inline form) --}}
                <form action="{{ route('lagu.update', $lagu->id_lagu) }}" method="POST" style="display:inline;">
                    @csrf
                    <input type="text" name="judul" value="{{ $lagu->judul }}">
                    <input type="text" name="artis" value="{{ $lagu->artis }}">
                    <input type="text" name="album" value="{{ $lagu->album }}">
                    <button type="submit">Update</button>
                </form>

                <a href="{{ route('lagu.destroy', $lagu->id_lagu) }}" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>