<!DOCTYPE html>
<html>
<head>
    <style>
        #member {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: auto;
            overflow-x: auto;
        }

        #member td,
        #member th {
            border: 1px solid #c3ffc5;
            padding: 4px;
            font-size: 12px;
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
    <h3 align="center">Laporan Transaksi Member</h3>
    <table id="member">
        <thead>
            <tr>
                <th>ID Transaksi Member</th>
                <th>ID Member</th>
                <th>Karyawan</th>
                <th>Jenis Transaksi</th>
                <th>Jasa</th>
                <th>Penukaran Poin</th>
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
                    <td>{{ $row->id_transaksiM }}</td>
                    <td>{{ $row->member->id_member }}-{{ $row->member->nama }}</td>
                    <td>{{ $row->karyawan->nama }}</td>
                    <td>{{ $row->jenistransaksi->jenis_transaksi }}</td>
                    <td>{{ $row->jasa->nama_jasa }}</td>
                    <td>{{ $row->penukaran->id_penukaranpoin }}</td>
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
