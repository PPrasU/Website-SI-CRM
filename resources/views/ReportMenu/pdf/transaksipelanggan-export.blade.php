<!DOCTYPE html>
<html>
<head>
    <style>
        #pelanggan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: auto;
            overflow-x: auto;
        }

        #pelanggan td,
        #pelanggan th {
            border: 1px solid #c3ffc5;
            padding: 8px;
            font-size: 12px;
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
    <h3 align="center">Laporan Transaksi Pelanggan</h3>
    <table id="pelanggan">
        <thead>
            <tr>
                <th>ID Transaksi Pelanggan</th>
                <th>Pelanggan</th>
                <th>Jenis Transaksi</th>
                <th>Jasa</th>
                <th>Berat (Kg)</th>
                <th>Total Bayar</th>
                <th>Pembayaran</th>
                <th>Kembalian</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_transaksiP }}</td>
                    <td>{{ $row->pelanggan->id_pelanggan }}-{{ $row->pelanggan->nama }}</td>
                    <td>{{ $row->jenistransaksi->jenis_transaksi }}</td>
                    <td>{{ $row->jasa->nama_jasa }}</td>
                    <td>{{ $row->berat }}</td>
                    <td>{{ $row->total_bayar }}</td>
                    <td>{{ $row->pembayaran }}</td>
                    <td>{{ $row->kembalian }}</td>
                    <td>{{ $row->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
