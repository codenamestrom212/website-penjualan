<?php 
    include 'header.php';
?>

<!-- PRODUK TERBARU -->
<div class="container mt-6 p-6" style="background-color: #cdcf76; border-radius: 20px; margin-bottom: 40px;">
    <h2 class="text-center gradient-text" style="width: 100%; border-bottom: 6px solid #76a4cf; padding-bottom: 12px;"><b>Produk Kami</b></h2>

    <div class="row">
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-sm- col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <img src="image/produk/<?= $row['image']; ?>" class="card-img-top product-img">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $row['nama']; ?></h5>
                        <p class="card-text text-success"><strong>Rp.<?= number_format($row['harga']); ?></strong></p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning me-md-2">Detail</a>
                            <?php if(isset($_SESSION['kd_cs'])){ ?>
                                <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                            <?php } else { ?>
                                <a href="keranjang.php" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
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

<?php 
    include 'footer.php';
?>

<style>
    .card {
        border-radius: 15px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
    }

    .product-img {
        max-width: 100%; 
        height: 200px; 
        object-fit: cover; 
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1.1rem;
    }

    .btn {
        border-radius: 50px;
        font-size: 0.9rem;
        padding: 0.5rem 1.5rem;
    }

    .btn-warning {
        background-color: #939c8c;
        color: #fff;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
    }

    .btn-warning:hover, .btn-success:hover {
        opacity: 0.8;
    }

    /* Menambahkan efek gradasi pada teks */
    .gradient-text {
        background: linear-gradient(90deg, #76a4cf,#76a4cf);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
