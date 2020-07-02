<?php 

session_start();
include ("koneksi.php");
require_once __DIR__ . '/vendor/autoload.php';
include "twitteroauth/twitteroauth.php";

$consumer_key = "iBnbpKXoe6QqgEtddULWZrtfR";
$consumer_secret = "OUtn0OdYwzo6piGD9hv4jYPhaoWrIuqPXZGp4KSsI4vZgO18vz";
$access_token = "2247094207-DNHVzUZO8Slx1BYxxJDDy9nuuGu65KBGkN6fSK1";
$access_token_secret = "UvvVx3z7KAUJ1uai3r8Ok8cA9CzTaSEENgpQHhCtXsMxk";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=prambors&result_type=recent&count=1');
$tweets1 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=prambors&result_type=recent&count=2');
$tweets2 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=prambors&result_type=recent&count=3');
$tweets3 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=prambors&result_type=recent&count=4');
$tweets4 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=prambors&result_type=recent&count=5');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLUSTERING DATA TWEET PRAMBORSS</title>
    <!--bootstrap-->
    <link href="include/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link href="include/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>

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
          <a class="navbar-brand" href="home.php">CLUSTERING DATA TWEET PRAMBORS</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
             <a href="gettweet.php">Get Tweet</a>
            </li>
            <li>
              <a href="textprocessing.php">Text Processing</a>
            </li>
            <li>
              <a href="#.php" onclick="window.open('textprocessing.php');">Clustering</a>
            </li>
            <li>
              <a href="#.php" onclick="window.open('textprocessing.php');">Result</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <meta charset="UTF-8">
<body><br>
<?php foreach ($tweets->statuses as $key => $tweet) { 
    $tweet;
 } ?><br>
<?php $tw = $tweet->text; ?>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <img src="<?=$tweet->user->profile_image_url;?>" /> <?php echo $tw; ?>

  <?php foreach ($tweets4->statuses as $key => $tweet4) { 
    $tweet4;
 } ?><br>
<?php $tw4 = $tweet4->text; ?>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <img src="<?=$tweet4->user->profile_image_url;?>" /> <?php echo $tw4; ?>

  <?php foreach ($tweets2->statuses as $key => $tweet2) { 
    $tweet2;
 } ?><br>
<?php $tw2 = $tweet2->text; ?>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <img src="<?=$tweet2->user->profile_image_url;?>" /> <?php echo $tw2; ?>

  <?php foreach ($tweets3->statuses as $key => $tweet3) { 
    $tweet3;
 } ?><br>
<?php $tw3 = $tweet3->text; ?>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <img src="<?=$tweet3->user->profile_image_url;?>" /> <?php echo $tw3; ?>
  

    <br>  
<br><br>






<div class="container">

      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Tweet Prambors
                </div>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--tabel alternatif-->
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Tweet 1</th>
                              <th>Tweet 2</th>
                              <th>Tweet 3</th>
                              <th>Tweet 4</th>
                          <tbody>
                            <?php
                            $sql =$tweet->text;
                            $sql4 =$tweet4->text;
                            $sql2 =$tweet2->text;
                            $sql3 =$tweet3->text;

                            

                            

                            ?>
                            <tr>
                              <td><?php echo $sql ?></td>

                              <td><?php echo $sql4 ?></td>

                              <td><?php echo $sql2 ?></td>
                              <td><?php echo $sql3 ?></td>



                            </tr>

                          </tbody>
                        </table>
                        <!--tabel alternatif-->
                      </div>
                    </div>
                </div>
                <!--panel body-->
            </div>
        </div>
      </div>
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
