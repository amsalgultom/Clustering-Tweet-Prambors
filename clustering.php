
<?php 


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
              <a href="result.php">Result</a>
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
              <center>Hasil Text Processing</center>
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
       		
         //stemming dan case folding 
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();


        $output   = $stemmer->stem($tw);
        $output1   = $stemmer->stem($tw1);
        $output2   = $stemmer->stem($tw2);  
        $output3   = $stemmer->stem($tw3);
        $output4   = $stemmer->stem($tw4);  
        ?>



        <?php 
        //stopword dan tokenizing
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

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>Cluster</center>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover">
                <tbody>

                  <?php
                    echo "<tr>
                      <td>Advertising</td>
                      <td>Lagu</td>";
                    ?>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<div class="row">
        <div class="col-lg-12 col-lg-offset-0">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>Clustering</center>
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

$tokenizer = new HybridLogic\Cluster\Basic;
$Cluster = new HybridLogic\Cluster($tokenizer);


?>

<?php

$Cluster->train('Lagu', 'judul');
$Cluster->train('Lagu', 'dengerin');
$Cluster->train('Lagu', 'dengerin');
$Cluster->train('Lagu', 'musik');
$Cluster->train('Lagu', 'nyetel');
$Cluster->train('Lagu', 'lagu');
$Cluster->train('Lagu', 'lagu');
$Cluster->train('Lagu', 'song');
$Cluster->train('Lagu', 'radiosmartfm');
$Cluster->train('Lagu', 'nightshift');
$Cluster->train('Lagu', 'trending20');
$Cluster->train('Lagu', 'play');
$Cluster->train('Lagu', 'feat');
$Cluster->train('Lagu', 'cover');
$Cluster->train('Lagu', 'song');
$Cluster->train('Lagu', 'bubblingupsong');
$Cluster->train('Lagu', 'dengerinpramborsdirumah');
$Cluster->train('Lagu', 'cinta');
$Cluster->train('Lagu', 'jatuh');
$Cluster->train('Lagu', 'sunsettrip');
$Cluster->train('Lagu', 'request');
$Cluster->train('Lagu', 'req');
$Cluster->train('Lagu', 'penyayi');
$Cluster->train('Lagu', 'lirik');
$Cluster->train('Lagu', 'irama');
$Cluster->train('Lagu', 'melodi');
$Cluster->train('Lagu', 'musik');
$Cluster->train('Lagu', 'music');
$Cluster->train('Lagu', 'denger');
$Cluster->train('Lagu', 'ladygaga');
$Cluster->train('Lagu', 'playing');

//judul Lagu
$Cluster->train('Lagu', 'think of love');
$Cluster->train('Lagu', 'nidji');
$Cluster->train('Lagu', 'alan walker');
$Cluster->train('Lagu', 'dead bachelors');
$Cluster->train('Lagu', 'weird genius');


$Cluster->train('Advertising', 'hadiah');
$Cluster->train('Advertising', 'advertising');
$Cluster->train('Advertising', 'managemen');
$Cluster->train('Advertising', 'wfhpramborsxyuzuisotonic');
$Cluster->train('Advertising', 'pramborsbcr2020');
$Cluster->train('Advertising', 'film');
$Cluster->train('Advertising', 'sunsetTrip');
$Cluster->train('Advertising', 'pramborsbcr2020jkt ');
$Cluster->train('Advertising', 'pramborsinibisnisgue');
$Cluster->train('Advertising', 'give');
$Cluster->train('Advertising', 'away');
$Cluster->train('Advertising', 'giveaway');
$Cluster->train('Advertising', 'challenge');
$Cluster->train('Advertising', 'isotonic');
$Cluster->train('Advertising', 'juta');
$Cluster->train('Advertising', 'rupiah');
$Cluster->train('Advertising', 'selamat');
$Cluster->train('Advertising', 'cobain');
$Cluster->train('Advertising', 'spotifyid');
$Cluster->train('Advertising', 'gratis');
$Cluster->train('Advertising', 'brilionet');
$Cluster->train('Advertising', 'follow');
$Cluster->train('Advertising', 'enakenakramadhanprambors');
$Cluster->train('Advertising', 'reseller');
$Cluster->train('Advertising', 'jastip');
$Cluster->train('Advertising', 'pramborsads');
$Cluster->train('Advertising', 'indorepresent');
$Cluster->train('Advertising', 'ads');

?>

<?php 

$groups = $Cluster->classify($hasil);
$groups2 = $Cluster->classify($hasil2);
$groups3 = $Cluster->classify($hasil3);
$groups4 = $Cluster->classify($hasil4);
?>
<?php
        
                      // echo
                      // "<tr>
                      // <td>".implode(", ",$groups)."</td>
                      // <td>".implode(", ",$groups4)."</td>
                      // <td>".implode(' ',$groups2)."</td>
                      // <td>".implode(' ',$groups3)."</td>"; 
                                  

                      echo 
                      "<tr>
                      <td>".json_encode($groups)."</td>
                      <td>".json_encode($groups4)."</td>
                      <td>".json_encode($groups2)."</td>
                      <td>".json_encode($groups3)."</td><br>";

                      $str = implode(", ",$groups);
                      $data = explode(", ",$str);

                      $str4 = implode(", ",$groups4);
                      $data4 = explode(", ",$str4);

                      $str2 = implode(", ",$groups2);
                      $data2 = explode(", ",$str2);

                      $str3 = implode(", ",$groups3);
                      $data3 = explode(", ",$str3);
                       
 
                  ?>        
                </tbody>
              </table>
          </tr></tbody>
</table></div></div></div></div></tr></tbody></table></div></div></div></div>

    <!--footer-->
    <br><br><br>
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