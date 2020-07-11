<?php 
require 'functions.php';
//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id nya
$video = query("SELECT * FROM video WHERE id = $id")[0];


 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Detail Video</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1>Detail Video</h1>
    </div>

  <div class="container">
    <div class="card mt-5 bg-secondary text-center" style="width: 18rem;">
      <div class="card-header">
        <h5><?= $video["title"]; ?></h5>
      </div>
      <ul class="list-group list-group-flush ">
        <li class="list-group-item">CATEGORY : <?= $video["category"]; ?></li>
        <li class="list-group-item">ATTACHE : <?= $video["attache"]; ?></li>
      </ul>
    </div>
    </div>
    <div class="container ">
      <video src="img/<?= $video["thumbnail"]; ?>" width="320" height="240" controls autoplay class="mt-3 bg-secondary">
      </video>
      <a class="btn btn-primary mx-4" href="tabelvideo.php" role="button">Back</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
