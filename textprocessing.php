
<?php 
/**
 * Twitter API SEARCH
 * Selim Hallaç
 * selimhallac@gmail.com
 */

session_start();
include ("koneksi.php");
require_once __DIR__ . '/vendor/autoload.php';
include "twitteroauth/twitteroauth.php";

include './autoload.php';

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
              <a href="clustering.php">Clustering</a>
            </li>
            <li>
              <a href="#.php" onclick="window.open('clustering.php');">Result</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <br><br>
 <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>STEMMING & CASE FOLDING</center>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover">
                <tbody>
                  <tr>
                              <th>Tweet 1</th>
                              <th>Tweet 2</th>
                              <th>Tweet 3</th>
                              <th>Tweet 4</th>
      

     <?php foreach ($tweets->statuses as $key => $tweet) { ?>
           <?$tweet;?>
         <?php } ?>

         <?php foreach ($tweets1->statuses as $key => $tweet1) { ?>
           <?$tweet1;?>
         <?php } ?>

         <?php foreach ($tweets2->statuses as $key => $tweet2) { ?>
          <?$tweet2;?>
         <?php } ?>

         <?php foreach ($tweets3->statuses as $key => $tweet3) { ?>
         <?$tweet3;?>
         <?php } ?>

         <?php foreach ($tweets4->statuses as $key => $tweet4) { ?>
         <?$tweet4;?>
         <?php } ?>


                 <?php
                $tw =$tweet->text;
                $tw1 =$tweet1->text;
                $tw2 =$tweet2->text;
                $tw3 =$tweet3->text;
                $tw4 =$tweet4->text;



        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();


        $output   = $stemmer->stem($tw);
        $output1   = $stemmer->stem($tw1);
        $output2   = $stemmer->stem($tw2);  
        $output3   = $stemmer->stem($tw3);
        $output4   = $stemmer->stem($tw4);  


        ?>
        
        
        <?php
                    echo "<tr>
                      <td>".($output)."</td>
                      <td>".($output4)."</td>
                      <td>".($output2)."</td>
                      <td>".($output3)."</td>";
                    ?>

                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>  
        
<div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>STOP WORD & TOKENIZING</center>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover">
                <tbody>
                  <tr>
                              <th>Tweet 1</th>
                              <th>Tweet 2</th>
                              <th>Tweet 3</th>
                              <th>Tweet 4</th>
<?php 
        $stopwordFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopword  = $stopwordFactory->createStopwordRemover();
        

        $hasil   = $stopword->remove($output);
        $hasil1   = $stopword->remove($output1);
        $hasil2   = $stopword->remove($output2);  
        $hasil3   = $stopword->remove($output3);
        $hasil4   = $stopword->remove($output4);  


        ?>
        
        
        <?php
                    echo "<tr>
                      <td>".($hasil)."</td>
                      <td>".($hasil4)."</td>
                      <td>".($hasil2)."</td>
                      <td>".($hasil3)."</td>";
                    ?>


                  
                </tbody>
              </table>
            </div>
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