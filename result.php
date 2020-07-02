
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
              <a href="#.php">Result</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <br>


     <!-- <!--  <div class="row">
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
              <center>Klaster</center>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover">
                <tbody>

                  <?php
                    echo "<tr>
                      <td>Klaster 1</td>
                      <td>Klaster 2</td>";
                    ?>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> -->

<!-- div class="row">
        <div class="col-lg-12 col-lg-offset-0">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>KLASTERISASI</center>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover">
                <tbody>
                  <tr>
                              <th>Tweet 1</th>
                              <th>Tweet 2</th>
                              <th>Tweet 3</th>
                              <th>Tweet 4</th>
 -->
     <?php 

$tokenizer = new HybridLogic\Cluster\Basic;
$Cluster = new HybridLogic\Cluster($tokenizer);


?>

<?php

$Cluster->train('Klaster2', 'judul');
$Cluster->train('Klaster2', 'dengerin');
$Cluster->train('Klaster2', 'dengerin');
$Cluster->train('Klaster2', 'musik');
$Cluster->train('Klaster2', 'nyetel');
$Cluster->train('Klaster2', 'lagu');
$Cluster->train('Klaster2', 'lagu');
$Cluster->train('Klaster2', 'song');
$Cluster->train('Klaster2', 'radiosmartfm');
$Cluster->train('Klaster2', 'nightshift');
$Cluster->train('Klaster2', 'trending20');
$Cluster->train('Klaster2', 'play');
$Cluster->train('Klaster2', 'feat');
$Cluster->train('Klaster2', 'cover');
$Cluster->train('Klaster2', 'song');
$Cluster->train('Klaster2', 'bubblingupsong');
$Cluster->train('Klaster2', 'dengerinpramborsdirumah');
$Cluster->train('Klaster2', 'cinta');
$Cluster->train('Klaster2', 'jatuh');
$Cluster->train('Klaster2', 'sunsettrip');
$Cluster->train('Klaster2', 'request');
$Cluster->train('Klaster2', 'req');
$Cluster->train('Klaster2', 'penyayi');
$Cluster->train('Klaster2', 'lirik');
$Cluster->train('Klaster2', 'irama');
$Cluster->train('Klaster2', 'melodi');
$Cluster->train('Klaster2', 'musik');
$Cluster->train('Klaster2', 'music');
$Cluster->train('Klaster2', 'denger');
$Cluster->train('Klaster2', 'ladygaga');
$Cluster->train('Klaster2', 'playing');

//judul Klaster2
$Cluster->train('Klaster2', 'think of love');
$Cluster->train('Klaster2', 'nidji');
$Cluster->train('Klaster2', 'alan walker');
$Cluster->train('Klaster2', 'dead bachelors');
$Cluster->train('Klaster2', 'weird genius');


$Cluster->train('Klaster1', 'hadiah');
$Cluster->train('Klaster1', 'advertising');
$Cluster->train('Klaster1', 'managemen');
$Cluster->train('Klaster1', 'wfhpramborsxyuzuisotonic');
$Cluster->train('Klaster1', 'pramborsbcr2020');
$Cluster->train('Klaster1', 'film');
$Cluster->train('Klaster1', 'sunsetTrip');
$Cluster->train('Klaster1', 'pramborsbcr2020jkt ');
$Cluster->train('Klaster1', 'pramborsinibisnisgue');
$Cluster->train('Klaster1', 'give');
$Cluster->train('Klaster1', 'away');
$Cluster->train('Klaster1', 'giveaway');
$Cluster->train('Klaster1', 'challenge');
$Cluster->train('Klaster1', 'isotonic');
$Cluster->train('Klaster1', 'juta');
$Cluster->train('Klaster1', 'rupiah');
$Cluster->train('Klaster1', 'selamat');
$Cluster->train('Klaster1', 'cobain');
$Cluster->train('Klaster1', 'spotifyid');
$Cluster->train('Klaster1', 'gratis');
$Cluster->train('Klaster1', 'brilionet');
$Cluster->train('Klaster1', 'follow');
$Cluster->train('Klaster1', 'enakenakramadhanprambors');
$Cluster->train('Klaster1', 'reseller');
$Cluster->train('Klaster1', 'jastip');
$Cluster->train('Klaster1', 'pramborsads');
$Cluster->train('Klaster1', 'indorepresent');
$Cluster->train('Klaster1', 'ads');

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
                                  

                      // echo 
                      // "<tr>
                      // <td>".json_encode($groups)."</td>
                      // <td>".json_encode($groups4)."</td>
                      // <td>".json_encode($groups2)."</td>
                      // <td>".json_encode($groups3)."</td><br>";

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
<!--               <?php
              if (isset($_POST["submit"])) {
                # code...
              
                $data0 = $data[0];
                $data1 = $data[1];

                $data40 = $data4[0];
                $data41 = $data4[1];

                $data20 = $data2[0];
                $data21 = $data2[1];

                $data30 = $data3[0];
                $data31 = $data3[1];
                 
                $sql = "INSERT INTO table_tweet VALUES('','$data0','$data1');";
                $sql .= "INSERT INTO table_tweet VALUES('','$data40','$data41');";
                $sql .= "INSERT INTO table_tweet VALUES('','$data20','$data21');";
                $sql .= "INSERT INTO table_tweet VALUES('','$data30','$data31')";
                if ($koneksi->multi_query($sql) === TRUE) {
                  
                } else {
                  echo "Error: " . $sql . "<br>" . $koneksi->error;
                }
              }
                $koneksi->close();
               ?> -->
<!--               <form method="POST">   
              <center> 
                  <input type="submit" name="submit" value="Simpan"> 
                  </center>
              </form> -->
              
            </div>
          </div>
        </div>
      </div><br> 
     
<div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>Mean</center>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover">
                <tbody>
                  <tr>
                              <th>Advertising</th>
                              <th>Lagu</th>

                  <?php
                      $data0 = $data[0];
                      $data1 = $data[1];

                      $data40 = $data4[0];
                      $data41 = $data4[1];

                      $data20 = $data2[0];
                      $data21 = $data2[1];

                      $data30 = $data3[0];
                      $data31 = $data3[1];

                      $a=array($data0, $data40, $data20, $data30);
                      $hasiladvertising = array_sum($a)/count($a);

                      $b=array($data1, $data41, $data21, $data31);
                      $hasillagu = array_sum($b)/count($b);
                  
                  // $sss = "SELECT AVG(lagu) FROM table_tweet;";
                  // $sos = "SELECT AVG(advertising) FROM table_tweet;";
                  // $lagu1 = mysqli_result($koneksi,$sss);
                  // $adv1 = mysqli_fetch($koneksi,"SELECT AVG(advertising) FROM table_tweet;");
                   ?>
<!--                   <?php
                    include "koneksi.php";
                    $query    =mysqli_query($koneksi, "SELECT * FROM table_tweet");
                    $data    =mysqli_fetch_array($query);
                    $n_advertising    =array($data['advertising']);  
                    $n_lagu    =array($data['lagu']);
                    $jml_advertising    =count($n_advertising);  
                    $jml_lagu    =count($n_lagu);  
                    $sum_lagu    =array_sum($n_lagu);
                    $sum_advertising    =array_sum($n_advertising); 
                    $rataadvertising    =$sum_advertising / $jml_advertising;
                    $ratalagu    =$sum_lagu / $jml_lagu;
                  ?> -->

                  <tr>
                  <td><?php echo $hasiladvertising ?></td>
                  <td><?php echo $hasillagu ?></td>
                  </tr>
                 

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

 <?php
$dataPoints = array(
      array("label"=> "Advertising [Mean : ".$hasiladvertising."]", "y"=> $hasiladvertising),
      array("label"=> "Lagu [Mean : ".$hasillagu."]", "y"=> $hasillagu),
      );
  
?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  title:{
    text: "Research Result"
  },
  subtitles: [{
    text: "Clustering Tweet Prambors"
  }],
  data: [{
    type: "pie",
    showInLegend: "true",
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - #percent%",
    yValueFormatString: "#,##0",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<br><br>
<div id="chartContainer" style="height: 400px; width: 100%;" align = "center"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>


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
</html> -->