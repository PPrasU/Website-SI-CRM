<!DOCTYPE html>
<html>
<head>
    <style>
        #member {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #member td,
        #member th {
            border: 1px solid #c3ffc5;
            padding: 8px;
        }

        #member tr:nth-child(even) {
            background-color: #d8ffd6;
        }

        #member tr:hover {
            background-color: #ddd;
        }

        #member th {
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
    <h3 align="center">Laporan Data Member</h3>
    <table id="member">
        <tr>
            <th>ID Member</th>
            <th>ID Pengguna</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Poin</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id_member }}</td>
                <td>{{ $row->pengguna->id_pengguna }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jenis_kelamin }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->poin }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
