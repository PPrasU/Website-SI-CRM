<!DOCTYPE html>
<html>
<head>
    <style>
        #pelanggan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #pelanggan td,
        #pelanggan th {
            border: 1px solid #c3ffc5;
            padding: 8px;
        }

        #pelanggan tr:nth-child(even) {
            background-color: #d8ffd6;
        }

        #pelanggan tr:hover {
            background-color: #ddd;
        }

        #pelanggan th {
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
    <h3 align="center">Laporan Data Pelanggan</h3>
    <table id="pelanggan">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kelamin</th>
                <th>No Hp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_pelanggan }}</td>
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
