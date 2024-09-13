<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Tidak disorting</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $index => $buku)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp.".number_format($buku->harga,2,',','.') }}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>{{ "Jumlah data yang dimiliki : ".$jumlah_data}}</h1>
    <h1>{{ "Jumlah harga pada tabel di atas : ".$jumlah_harga}}</h1>

<br>
    <h1>Tidak disorting dan telah di beri index</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>nomor urut</th>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $index => $buku)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp.".number_format($buku->harga,2,',','.') }}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <h1>Sorting by Desc</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku_sort as $index => $buku)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp.".number_format($buku->harga,2,',','.') }}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
