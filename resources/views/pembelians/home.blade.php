<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Penjualan - AHM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: #f7fbff">

    <div class="section">
        <div class="container mt-5">
            <h1 class="text-center my-4" style="color: #e91111; font-weight: bolder">AHM</h1>
            <h3 class="text-center my-4" style="color:#e91111; font-weight:bolder">astra honda motor</h3>
            <h5 class="text-center my-4" style="color:#e91111; font-weight:bolder">cabang bangkalan</h5>
            <a href="/pembelian" class="btn btn-md btn-success mb-3">DATA PENJUALAN</a>
            <div style="background-color: white; padding: 10px auto">
                <div class="box">
                    <div class="row">
                        @forelse ($pembelians as $pembelian)
                            <?php
                            $biaya = $pembelian->biaya;
                            ?>
                            <div class="card text-center">
                                <p style="font-weight: bold"><a
                                        href="{{ route('pembelians.show', $pembelian->id) }}">{{ $pembelian->nama_motor }}</a>
                                </p>

                                <div class="description text-center">
                                    <div class="biaya">
                                        <p>ID pembeli: {{ $pembelian->id_pembeli }}</p>
                                        <p>Jumlah pembelian: {{ $pembelian->jumlah_pembelian }}</p>
                                        <p>Total biaya: <?= 'Rp ' . number_format($biaya, 0, ',', '.') ?></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger">
                                Produk Tidak Tersedia.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h3 class="text-center my-4" style="color:#e91111; font-weight:bolder; position: fixed; bottom: 0; width: 100%; background: #f7fbff; padding: 10px 0;">One HEART</h3>
    <p style="position: fixed; bottom: 0; width: 100%; text-align: center; background: #f7fbff; margin: 0; padding: 5px 0; font-size: 17px;">&copy; 2024 Mustofa. All Rights Reserved.</p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
