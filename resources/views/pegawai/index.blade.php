<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>
<body>
    <div class="container mt-5 mb-5">
        <h1>Daftar Pegawai</h1>
        <br>
        <a href="{{ url('/') }}" class="btn btn-success">Kembali Ke Landing Page</a>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
        <br><br>
        <table id="pegawaiTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $x)
                    <tr>
                        <td>{{ $x->id }}</td>
                        <td>{{ $x->nama }}</td>
                        <td>{{ $x->jabatan }}</td>
                        <td>{{ $x->email }}</td>
                        <td>{{ $x->tanggal_lahir }}</td>
                        <td>
                            @if ($x->foto)
                                <img src="{{ asset('storage/' . $x->foto) }}" width="50" height="50" alt="Foto Pegawai">
                            @else
                                Tidak Ada
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('pegawai.edit', $x->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#pegawaiTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        });
    </script>
</body>
</html>
