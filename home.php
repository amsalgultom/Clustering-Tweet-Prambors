<?php
//koneksi
session_start();
include "koneksi.php";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLUSTERING DATA TWEET PRAMBORS</title>
    <!--bootstrap-->
    <link href="include/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/slider.css" rel="stylesheet" type="text/css" media="all">

  </head>
  <body><br>
<!--navbar navbar-default navbar-custom-->
    <!--menu-->
    <nav class="">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CLUSTERING DATA TWEET PRAMBORS</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="gettweet.php">Get Tweet</a>
            </li>
            <li>
            <a href="#.php" onclick="window.open('gettweet.php');">Text Preprocessing</a>
            </li>
            <li>
              <a href="#.php" onclick="window.open('gettweet.php');">Clustering</a>
            </li>
            <li>
              <a href="#.php" onclick="window.open('gettweet.php');">Result</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div id="slider" >
      <figure>
        <img src="gambar/banner1.png">
        <img src="gambar/banner3.png">
        <img src="gambar/banner4.png">
        <img src="gambar/banner5.png">
      </figure>
      <pre><p><center>Klasterisasi Tweet Prambors, sebuah aplikasi web yang dibuat dengan tujuan untuk membantu mengelompokan tweet yang dikirimkan pada akun Prambors. 
      Penerapan Text Mining untuk melakukan clustering data tweet prambors. Dengan Mengelompokkan 2 Klaster yaitu Advertising dan Lagu.</a>
    </div><br>
    <!--footer-->
   
    <!--footer-->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <em>PENERAPAN TEXT MINING UNTUK MELAKUKAN CLUSTERING DATA TWEET PRAMBORS</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--plugin-->
    <script src="include/js/bootstrap.min.js"></script>

  </body>
</html>
