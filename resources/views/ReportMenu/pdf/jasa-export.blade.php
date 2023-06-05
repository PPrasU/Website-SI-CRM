<!DOCTYPE html>
<html>
<head>
    <style>
        #jasa {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #jasa td,
        #jasa th {
            border: 1px solid #c3ffc5;
            padding: 8px;
        }

        #jasa tr:nth-child(even) {
            background-color: #d8ffd6;
        }

        #jasa tr:hover {
            background-color: #ddd;
        }

        #jasa th {
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
    <h3 align="center">Laporan Data Jasa</h3>
    <table id="jasa">
        <thead>
            <tr>
                <th>ID Jasa</th>
                <th>Barang</th>
                <th>Nama Jasa</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                <td>{{ $row->id_jasa }}</td>
                <td>{{ $row->barang->id_barang }}--{{ $row->barang->nama_barang }}</td>
                <td>{{ $row->nama_jasa }}</td>
                <td>{{ $row->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
