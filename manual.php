<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Aplikasi - Twenty Three Jeans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color:#76a4cf;
        }
        .panel-heading {
            background-color: #76a4cf !important;
            color: #fff !important;
            cursor: pointer;
        }
        .panel-title {
            font-size: 18px;
            font-weight: bold;
        }
        .panel-body {
            font-size: 16px;
            line-height: 1.6;
        }
        .panel-body ol {
            padding-left: 20px;
        }
        .panel-body li {
            margin-bottom: 10px;
        }
        .fa-chevron-down {
            float: right;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2 style="width: 100%; border-bottom: 4px solid #76a4cf; margin-bottom: 20px;"><b>Manual Aplikasi</b></h2>
    <div class="bs-acc">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000;">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-question-circle"></i> Bagaimana Cara Berbelanja di Twenty Three Jeans?
                        <i class="fa fa-chevron-down"></i>
                    </h4>
                </div>
                </a>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ol>
                            <li>Pastikan Anda sudah Daftar/Register dahulu</li>
                            <li>Pilih Produk yang ingin dibeli</li>
                            <li>Lakukan Checkout pesanan anda</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
