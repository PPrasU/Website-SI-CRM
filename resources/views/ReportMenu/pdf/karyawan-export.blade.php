<!DOCTYPE html>
<html>
<head>
    <style>
        #karyawan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #karyawan td,
        #karyawan th {
            border: 1px solid #c3ffc5;
            padding: 8px;
        }

        #karyawan tr:nth-child(even) {
            background-color: #d8ffd6;
        }

        #karyawan tr:hover {
            background-color: #ddd;
        }

        #karyawan th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #00ff00;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3 align="center">Laporan Data Karyawan</h3>
    <table id="karyawan">
        <thead>
            <tr>
                <th>ID Karyawan</th>
                <th>ID Pengguna</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
                <th>No Hp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                <td>{{ $row->id_karyawan }}</td>
                <td>{{ $row->pengguna->id_pengguna }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jenis_kelamin }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
