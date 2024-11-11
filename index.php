<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twenty Three Jeans</title>
    <style>
        /* Background dengan pola wavy */
        body {
            background-color: #76a4cf; /* Warna latar belakang */
            background-image: url('image/footer.jpg'); /* Gambar latar belakang */
            background-size: 50%; /* Mengurangi ukuran gambar latar belakang */
            background-repeat: repeat;
            background-attachment: fixed;
            animation: fadeInBackground 2s ease-in-out; /* Menambahkan animasi */
        }

        @keyframes fadeInBackground {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang kontainer dengan opacity */
            padding: 30px;
            margin-top: 40px;
            margin-bottom: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%; /* Memperbesar ukuran kontainer */
            max-width: 1600px; /* Menambahkan batas maksimal untuk lebar */
            margin-left: auto; /* Mengatur agar kontainer berada di tengah */
            margin-right: auto; /* Mengatur agar kontainer berada di tengah */
        }

        .image {
            margin-top: -21px;
        }

        .thumbnail {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            background-color: #fff;
            transition: transform 0.3s, box-shadow 0.3s; /* Menambahkan transisi */
        }

        .thumbnail:hover {
            transform: scale(1.05); /* Memperbesar ukuran sedikit */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Menambahkan shadow */
        }

        .product-img {
            max-width: 100%; /* Mengatur agar gambar tidak melebihi lebar kontainer */
            max-height: 200px; /* Mengatur tinggi maksimal gambar */
            object-fit: cover; /* Menjaga proporsi gambar */
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
    <div class="image">
        <img src="image/home/bg2.png" style="width: 100%; height: 650px;">
    </div>
</div>

<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">
<h4 class="text-center" style="font-family: Arial, sans-serif; padding: 12px 0; font-style: italic; line-height: 1.9; border-top: 6px solid #76a4cf; border-bottom: 6px solid #76a4cf;">
    Kami mengutamakan kualitas, kenyamanan, dan gaya dalam setiap desain kami, menjadikan Koleksi Twenty Three Jeans pilihan yang sempurna untuk Anda tampil trendi dan percaya diri. Setiap jeans dibuat dengan penuh perhatian dan dedikasi untuk memenuhi kebutuhan fashion Anda.
</h4>


    <h2 style="width: 100%; border-bottom: 6px solid #76a4cf; margin-top: 80px;"><b>Produk Twenty Three Jeans</b></h2>

    <div class="row">
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-sm-5 col-md-4 mb-3">
                <div class="thumbnail">
                    <img src="image/produk/<?= $row['image']; ?>" class="img-fluid product-img">
                    <div class="caption">
                        <h3><?= $row['nama']; ?></h3>
                        <h4>Rp.<?= number_format($row['harga']); ?></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-block">Detail</a> 
                            </div>
                            <?php if(isset($_SESSION['kd_cs'])){ ?>
                                <div class="col-md-6">
                                    <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-success btn-block"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-6">
                                    <a href="keranjang.php" class="btn btn-success btn-block"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
        }
        ?>
    </div>
</div>

<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>

</body>
</html>
