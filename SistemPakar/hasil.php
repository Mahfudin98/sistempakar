<!DOCTYPE html>
<html lang="en">
  <head>
   <link rel="shortcut icon" href="gambar/icon.ico">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>tes minat dan bakat jurusan kuliah</title>

    <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/font-awesome.min.css">
	 <link href="css/animate.min.css" rel="stylesheet">
   <link href="css/prettyPhoto.css" rel="stylesheet">
	 <link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
   <script src="js/highcharts.js"></script>
   <script src="js/exporting.js"></script>

   <?php
   include ('header.php');
    ?>

    <section id="contact-page">
          <div class="container">
              <div class="center">
                  <h2>Drop Your Message</h2>
              </div>
              <div class="row contact-wrap">
                <div class="justify wow fadeInDown">
                  <div class="status alert alert-success" style="display: none"></div>
                  <center><h1>Ini adalah hasil Tes Minat dan Bakat Jurusan Kuliah kamu</h1></center>
                    <center><h1><b>Hasilnya adalah</b></h1></center>
                    <?php
                    if (isset ($_POST['cmdSubmit'])) {
                      $q = $_POST['q'];
                      $q1 =  $_POST['q1'];
                      $q2 =  $_POST['q2'];
                      $q3 =  $_POST['q3'];
                      $q4 =  $_POST['q4'];
                      $q5 =  $_POST['q5'];
                      $q6 =  $_POST['q6'];
                      $q7 =  $_POST['q7'];
                      $q8 =  $_POST['q8'];
                      $q9 =  $_POST['q9'];
                      $q10 =  $_POST['q10'];
                      $q11 =  $_POST['q11'];
                      $q12 =  $_POST['q12'];
                      $q13 =  $_POST['q13'];
                      $q14 =  $_POST['q14'];
                      $q15 =  $_POST['q15'];
                      $q16 =  $_POST['q16'];
                      $q17 =  $_POST['q17'];
                      $q18 =  $_POST['q18'];
                      $q19 =  $_POST['q19'];
                      $q20 =  $_POST['q20'];
                      $q21 =  $_POST['q21'];
                      $q22 =  $_POST['q22'];
                      $q23 =  $_POST['q23'];
                      $q24 =  $_POST['q24'];
                      $q25 =  $_POST['q25'];
                      $q26 =  $_POST['q26'];
                      $q27 =  $_POST['q27'];
                      $q28 =  $_POST['q28'];
                      $q29 =  $_POST['q29'];
                      $q30 =  $_POST['q30'];
                      $q31 =  $_POST['q31'];
                      $q32 =  $_POST['q32'];
                      $q33 =  $_POST['q33'];
                      $q34 =  $_POST['q34'];
                      $q35 =  $_POST['q35'];
                      $q36 =  $_POST['q36'];
                      $q37 =  $_POST['q37'];
                      $q38 =  $_POST['q38'];
                      $q39 =  $_POST['q39'];
                      $q40 =  $_POST['q40'];
                      $q41 =  $_POST['q41'];
                    }
                    $score = 0;

                    //condition statement for scoring:
                    //$question is the question that is answered item will appear
                    // the only answered
                    if ($q == "selalu") {
                        $question ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score = 100;}
                     elseif ($q == "sering"){
                        $question ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score = 75;}
                     elseif ($q == "jarang"){
                        $question ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score = 50;}
                    elseif ($q == "tidak"){
                        $question ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score = 25;
                    }


                    if ($q1 == "selalu") {
                        $question1 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score1 = 100;}
                     elseif ($q1 == "sering"){
                        $question1 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score1 = 75;}
                     elseif ($q1 == "jarang"){
                        $question1="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score1 = 50;}
                    elseif ($q1 == "tidak"){
                        $question1="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score1 = 25;
                    }


                    if ($q2 == "selalu") {
                        $question2 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score2 = 100;}
                     elseif ($q2 == "sering"){
                        $question2 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score2 = 75;}
                     elseif ($q2 == "jarang"){
                        $question2="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score2 = 50;}
                     elseif ($q2 == "tidak"){
                        $question2="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score2 = 25;
                    }


                    if ($q3 == "selalu") {
                        $question3 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score3 = 100;}
                     elseif ($q3 == "sering"){
                        $question3 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score3 = 75;}
                     elseif ($q3 == "jarang"){
                        $question3="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score3 = 50;}
                     elseif ($q3 == "tidak"){
                        $question3="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score3 = 25;
                    }


                    if ($q4 == "selalu") {
                        $question4 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score4 = 100;}
                     elseif ($q4 == "sering"){
                        $question4 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score4 = 75;}
                     elseif ($q4 == "jarang"){
                        $question4 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score4 = 50;}
                     elseif ($q4 == "tidak"){
                        $question4 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score4 = 25;
                    }

                    if ($q5 == "selalu") {
                        $question5 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score5 = 100;}
                     elseif ($q5 == "sering"){
                        $question5 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score5 = 75;}
                     elseif ($q5 == "jarang"){
                        $question5 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score5 = 50;}
                    elseif ($q5 == "tidak"){
                        $question5 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score5 = 25;
                    }

                    if ($q6 == "selalu") {
                        $question6 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score6 = 100;}
                     elseif ($q6 == "sering"){
                        $question6 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score6 = 75;}
                     elseif ($q6 == "jarang"){
                        $question6 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score6 = 50;}
                    elseif ($q6 == "tidak"){
                        $question6 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score6 = 25;
                    }

                    if ($q7 == "selalu") {
                        $question7 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score7 = 100;}
                     elseif ($q7 == "sering"){
                        $question7 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score7 = 75;}
                     elseif ($q7 == "jarang"){
                        $question7 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score7 = 50;}
                    elseif ($q7 == "tidak"){
                        $question7 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score7 = 25;
                    }

                    if ($q8 == "selalu") {
                        $question8 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score8 = 100;}
                     elseif ($q8 == "sering"){
                        $question8 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score8 = 75;}
                     elseif ($q8 == "jarang"){
                        $question8 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score8 = 50;}
                    elseif ($q8 == "tidak"){
                        $question8 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score8 = 25;
                    }

                    if ($q9 == "selalu") {
                        $question9 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score9 = 100;}
                     elseif ($q9 == "sering"){
                        $question9 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score9 = 75;}
                     elseif ($q9 == "jarang"){
                        $question9 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score9 = 50;}
                    elseif ($q9 == "tidak"){
                        $question9 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score9 = 25;
                    }

                    if ($q10 == "selalu") {
                        $question10 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score10 = 100;}
                     elseif ($q10 == "sering"){
                        $question10 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score10 = 75;}
                     elseif ($q10 == "jarang"){
                        $question10 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score10 = 50;}
                    elseif ($q10 == "tidak"){
                        $question10 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score10 = 25;
                    }

                    if ($q11 == "selalu") {
                        $question11 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score11 = 100;}
                     elseif ($q11 == "sering"){
                        $question11 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score11 = 75;}
                     elseif ($q11 == "jarang"){
                        $question11 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score11 = 50;}
                    elseif ($q11 == "tidak"){
                        $question11 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score11 = 25;
                    }

                    if ($q12 == "selalu") {
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 100;}
                     elseif ($q12 == "sering"){
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 75;}
                     elseif ($q12 == "jarang"){
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 50;}
                    elseif ($q12 == "tidak"){
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 25;
                    }

                    if ($q12 == "selalu") {
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 100;}
                     elseif ($q12 == "sering"){
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 75;}
                     elseif ($q12 == "jarang"){
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 50;}
                    elseif ($q12 == "tidak"){
                        $question12 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score12 = 25;
                    }

                    if ($q13 == "selalu") {
                        $question13 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score13 = 100;}
                     elseif ($q13 == "sering"){
                        $question13 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score13 = 75;}
                     elseif ($q13 == "jarang"){
                        $question13 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score13 = 50;}
                    elseif ($q13 == "tidak"){
                        $question13 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score13 = 25;
                    }

                    if ($q14 == "selalu") {
                        $question14 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score14 = 100;}
                     elseif ($q14 == "sering"){
                        $question14 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score14 = 75;}
                     elseif ($q14 == "jarang"){
                        $question14 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score14 = 50;}
                    elseif ($q14 == "tidak"){
                        $question14 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score14 = 25;
                    }

                    if ($q15 == "selalu") {
                        $question15 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score15 = 100;}
                     elseif ($q15 == "sering"){
                        $question15 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score15 = 75;}
                     elseif ($q15 == "jarang"){
                        $question15 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score15 = 50;}
                    elseif ($q15 == "tidak"){
                        $question15 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score15 = 25;
                    }

                    if ($q16 == "selalu") {
                        $question16 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score16 = 100;}
                     elseif ($q16 == "sering"){
                        $question16 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score16 = 75;}
                     elseif ($q16 == "jarang"){
                        $question16 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score16 = 50;}
                    elseif ($q16 == "tidak"){
                        $question16 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score16 = 25;
                    }

                    if ($q17 == "selalu") {
                        $question17 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score17 = 100;}
                     elseif ($q17 == "sering"){
                        $question17 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score17 = 75;}
                     elseif ($q17 == "jarang"){
                        $question17 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score17 = 50;}
                    elseif ($q17 == "tidak"){
                        $question17 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score17 = 25;
                    }

                    if ($q18 == "selalu") {
                        $question18 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score18 = 100;}
                     elseif ($q18 == "sering"){
                        $question18 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score18 = 75;}
                     elseif ($q18 == "jarang"){
                        $question18 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score18 = 50;}
                    elseif ($q18 == "tidak"){
                        $question18 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score18 = 25;
                    }

                    if ($q19 == "selalu") {
                        $question19 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score19 = 100;}
                     elseif ($q19 == "sering"){
                        $question19 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score19 = 75;}
                     elseif ($q19 == "jarang"){
                        $question19 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score19 = 50;}
                    elseif ($q19 == "tidak"){
                        $question19 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score19 = 25;
                    }

                    if ($q20 == "selalu") {
                        $question20 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score20 = 100;}
                     elseif ($q20 == "sering"){
                        $question20 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score20 = 75;}
                     elseif ($q20 == "jarang"){
                        $question20 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score20 = 50;}
                    elseif ($q20 == "tidak"){
                        $question20 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score20 = 25;
                    }

                    if ($q21 == "selalu") {
                        $question21 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score21 = 100;}
                     elseif ($q21 == "sering"){
                        $question21 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score21 = 75;}
                     elseif ($q21 == "jarang"){
                        $question21 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score21 = 50;}
                    elseif ($q21 == "tidak"){
                        $question21 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score21 = 25;
                    }

                    if ($q22 == "selalu") {
                        $question22 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score22 = 100;}
                     elseif ($q22 == "sering"){
                        $question22 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score22 = 75;}
                     elseif ($q22 == "jarang"){
                        $question22 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score22 = 50;}
                    elseif ($q22 == "tidak"){
                        $question22 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score22 = 25;
                    }

                    if ($q23 == "selalu") {
                        $question23 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score23 = 100;}
                     elseif ($q23 == "sering"){
                        $question23 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score23 = 75;}
                     elseif ($q23 == "jarang"){
                        $question23 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score23 = 50;}
                    elseif ($q23 == "tidak"){
                        $question23 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score23 = 25;
                    }

                    if ($q24 == "selalu") {
                        $question24 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score24 = 100;}
                     elseif ($q24 == "sering"){
                        $question24 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score24 = 75;}
                     elseif ($q24 == "jarang"){
                        $question24 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score24 = 50;}
                    elseif ($q24 == "tidak"){
                        $question24 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score24 = 25;
                    }

                    if ($q25 == "selalu") {
                        $question25 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score25 = 100;}
                     elseif ($q25 == "sering"){
                        $question25 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score25 = 75;}
                     elseif ($q25 == "jarang"){
                        $question25 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score25 = 50;}
                    elseif ($q25 == "tidak"){
                        $question25 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score25 = 25;
                    }

                    if ($q26 == "selalu") {
                        $question26 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score26 = 100;}
                     elseif ($q26 == "sering"){
                        $question26 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score26 = 75;}
                     elseif ($q26 == "jarang"){
                        $question26 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score26 = 50;}
                    elseif ($q26 == "tidak"){
                        $question26 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score26 = 25;
                    }

                    if ($q27 == "selalu") {
                        $question27 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score27 = 100;}
                     elseif ($q27 == "sering"){
                        $question27 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score27 = 75;}
                     elseif ($q27 == "jarang"){
                        $question27 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score27 = 50;}
                    elseif ($q27 == "tidak"){
                        $question27 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score27 = 25;
                    }

                    if ($q28 == "selalu") {
                        $question28 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score28 = 100;}
                     elseif ($q28 == "sering"){
                        $question28 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score28 = 75;}
                     elseif ($q28 == "jarang"){
                        $question28 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score28 = 50;}
                    elseif ($q28 == "tidak"){
                        $question28 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score28 = 25;
                    }

                    if ($q29 == "selalu") {
                        $question29 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score29 = 100;}
                     elseif ($q29 == "sering"){
                        $question29 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score29 = 75;}
                     elseif ($q29 == "jarang"){
                        $question29 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score29 = 50;}
                    elseif ($q29 == "tidak"){
                        $question29 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score29 = 25;
                    }

                    if ($q30 == "selalu") {
                        $question30 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score30 = 100;}
                     elseif ($q30 == "sering"){
                        $question30 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score30 = 75;}
                     elseif ($q30 == "jarang"){
                        $question30 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score30 = 50;}
                    elseif ($q30 == "tidak"){
                        $question30 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score30 = 25;
                    }

                    if ($q31 == "selalu") {
                        $question31 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score31 = 100;}
                     elseif ($q31 == "sering"){
                        $question31 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score31 = 75;}
                     elseif ($q31 == "jarang"){
                        $question31 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score31 = 50;}
                    elseif ($q31 == "tidak"){
                        $question31 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score31 = 25;
                    }

                    if ($q32 == "selalu") {
                        $question32 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score32 = 100;}
                     elseif ($q32 == "sering"){
                        $question32 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score32 = 75;}
                     elseif ($q32 == "jarang"){
                        $question32 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score32 = 50;}
                    elseif ($q32 == "tidak"){
                        $question32 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score32 = 25;
                    }

                    if ($q33 == "selalu") {
                        $question33 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score33 = 100;}
                     elseif ($q33 == "sering"){
                        $question33 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score33 = 75;}
                     elseif ($q33 == "jarang"){
                        $question33 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score33 = 50;}
                    elseif ($q33 == "tidak"){
                        $question33 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score33 = 25;
                    }

                    if ($q34 == "selalu") {
                        $question34 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score34 = 100;}
                     elseif ($q34 == "sering"){
                        $question34 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score34 = 75;}
                     elseif ($q34 == "jarang"){
                        $question34 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score34 = 50;}
                    elseif ($q34 == "tidak"){
                        $question34 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score34 = 25;
                    }

                    if ($q35 == "selalu") {
                        $question35 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score35 = 100;}
                     elseif ($q35 == "sering"){
                        $question35 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score35 = 75;}
                     elseif ($q35 == "jarang"){
                        $question35 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score35 = 50;}
                    elseif ($q35 == "tidak"){
                        $question35 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score35 = 25;
                    }

                    if ($q36 == "selalu") {
                        $question36 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score36 = 100;}
                     elseif ($q36 == "sering"){
                        $question36 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score36 = 75;}
                     elseif ($q36 == "jarang"){
                        $question36 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score36 = 50;}
                    elseif ($q36 == "tidak"){
                        $question36 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score36 = 25;
                    }

                    if ($q37 == "selalu") {
                        $question37 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score37 = 100;}
                     elseif ($q37 == "sering"){
                        $question37 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score37 = 75;}
                     elseif ($q37 == "jarang"){
                        $question37 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score37 = 50;}
                    elseif ($q37 == "tidak"){
                        $question37 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score37 = 25;
                    }

                    if ($q38 == "selalu") {
                        $question38 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score38 = 100;}
                     elseif ($q38 == "sering"){
                        $question38 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score38 = 75;}
                     elseif ($q38 == "jarang"){
                        $question38 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score38 = 50;}
                    elseif ($q38 == "tidak"){
                        $question38 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score38 = 25;
                    }

                    if ($q39 == "selalu") {
                        $question39 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score39 = 100;}
                     elseif ($q39 == "sering"){
                        $question39 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score39 = 75;}
                     elseif ($q39 == "jarang"){
                        $question39 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score39 = 50;}
                    elseif ($q39 == "tidak"){
                        $question39 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score39 = 25;
                    }

                    if ($q40 == "selalu") {
                        $question40 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score40 = 100;}
                     elseif ($q40 == "sering"){
                        $question40 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score40 = 75;}
                     elseif ($q40 == "jarang"){
                        $question40 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score40 = 50;}
                    elseif ($q40 == "tidak"){
                        $question40 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score40 = 25;
                    }

                    if ($q41 == "selalu") {
                        $question41 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score41 = 100;}
                     elseif ($q41 == "sering"){
                        $question41 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score41 = 75;}
                     elseif ($q41 == "jarang"){
                        $question41 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score41 = 50;}
                    elseif ($q41 == "tidak"){
                        $question41 ="What are the two binary numbers? &nbsp;&nbsp;&nbsp; ";
                      $score41 = 25;
                    }
                    // code to generate the total score..... n_n
                        $total  = 1 / 7 * ($score2  + $score5  + $score7  + $score8  + $score10 + $score18 + $score35);
                        $total1 = 1 / 7 * ($score   + $score9  + $score13 + $score15 + $score23 + $score24 + $score29);
                        $total2 = 1 / 7 * ($score1  + $score6  + $score14 + $score22 + $score27 + $score28 + $score40);
                        $total3 = 1 / 7 * ($score3  + $score16 + $score17 + $score25 + $score32 + $score37 + $score39);
                        $total4 = 1 / 7 * ($score4  + $score12 + $score19 + $score20 + $score21 + $score31 + $score36);
                        $total5 = 1 / 7 * ($score11 + $score26 + $score30 + $score33 + $score34 + $score38 + $score41);
                     ?>
                     <div id="container" style="min-width: 310px; max-width: 1000px; height: 500px; margin: 0 auto"></div>
                    <script type="text/javascript">
                      Highcharts.chart('container', {
                          chart: {
                              type: 'bar'
                          },
                          title: {
                              text: 'Diagram Batang Hasil Tes Minat dan Bakat'
                          },
                          xAxis: {
                              categories: ['Pelaku', 'Pemikir', 'Pembuat', 'Penolong', 'Perayu', 'Pengelola']
                          },
                          yAxis: {
                              min: 0,
                              title: {
                                  text: 'Total tes minat bakat'
                              }
                          },
                          legend: {
                              reversed: true
                          },
                          plotOptions: {
                              series: {
                                  stacking: 'normal'
                              }
                          },
                          series: [{
                              name: 'Pelaku',
                              data: [ <?php $total;
                                      $total_format = number_format($total);
                                      echo "$total_format";
                                       ?>,0,0,0,0,0 ]
                          }, {
                              name: 'Pemikir',
                              data: [ 0,<?php
                                      $total1;
                                      $total1_format = number_format($total1);
                                      echo "$total1_format";
                                      ?>,0,0,0,0 ]
                          }, {
                              name: 'Pembuat',
                              data: [ 0,0,<?php $total2;
                                      $total2_format = number_format($total2);
                                      echo "$total2_format";
                                      ?>,0,0,0]
                          },{
                              name: 'Penolong',
                              data: [ 0,0,0,<?php $total3;
                                      $total3_format = number_format($total3);
                                      echo "$total3_format";
                                      ?>,0,0]
                          },{
                              name: 'Perayu',
                              data: [ 0,0,0,0,<?php $total4;
                                      $total4_format = number_format($total4);
                                      echo "$total4_format";
                                      ?>,0]
                          },{
                              name: 'Pengelola',
                              data: [ 0,0,0,0,0,<?php $total5;
                                      $total5_format = number_format($total5);
                                      echo "$total5_format";
                                      ?>]
                          }]
                      });
                    </script>

                  </div>
                </div>
              </div><!--/.row-->
          </div><!--/.container-->
      </section><!--/#contact-page-->

      <selection id="recent-works">
        <div class="container">
          <div class="row">
            <div class="col-md-1">
            </div>
              <div class="col-md-10">
          <center><h1>Penjelasan Hasil Tes</h1></center></br></hr>
        <?php $realistik = ("<center><h2>$total_format % REALISTIK (PELAKU)</h2></center>
        <table class='table table-bordered table-striped table-hover'>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h3>Analisis Pribadi :</h3>
                <p>Menyukai pekerjaan yang berhubungan langsung dengan sebuah benda, seperti <b>Mekanik, Pilot, Petani, Peternak, Desainer, Operetor, Bangunan.</b> Mereka menikmati dalam memperbaiki alat, membangun atau membuat benda.</p></td>
              </tr>
              <tr>
                <td><h3>Kemampuan Penunjang :</h3>
                <p>Komputer (Software dan Hardware), Pemrograman, Matematika, Menyukai Praktek daripada Teori.</p></td>
              </tr>
              <tr>
                <td><h3>Jurusan Yang Sesuai :</h3>
                <p><b>Teknik Mesin, Teknik Sipil, Teknik Elektro, Pertanian, Perikanan, Automotif, Farmasi.</b></p></td>
              </tr>
            </tbody>
          </table>
              "); echo "$realistik";?></br></hr>
          <?php $investigatif = ("<center><h2>$total1_format % INVESTIGATIF (PEMIKIR)</h2></center>
          <table class='table table-bordered table-striped table-hover'>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h3>Analisis Pribadi :</h3>
                    <p>Menyukai penelitian dan pengembagan, investigasi dan experimen. Mereka selalu mencari sebuah solusi dari masalah yang ada, kemudian sangat berminat untuk memecahkannya.</p></td>
              </tr>
              <tr>
                <td><h3>Kemampuan Penunjang :</h3>
                    <p>Matematika, Analitycal Thinking, Software Komputer.</p></td>
              </tr>
              <tr>
                <td><h3>Jurusan Yang Sesuai :</h3>
                    <p><b>Kimia, Fisika, Gizi, Biologi, Desain Periklanan, Hukum, Perangkat Lunak, Kriminologi, Matematika, dan Ilmu Pasti atau Eksakta.</b></td>
              </tr>
            </tbody>
          </table>"); echo "$investigatif";?></br></hr>
          <?php $artistik = ("<center><h2>$total2_format % ARTISTIK (PEMBUAT)</h2></center>
          <table class='table table-bordered table-striped table-hover'>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h3>Analisis Pribadi :</h3>
                    <p>Kepribadian yang sangat menyukai untuk berkarya. Punya rasa seni tinggi baik dari aspek <b>Visual, Audio, dan Perasaan</b>. Bidang artistic sangat berhubungan dengan <b>Seni dan Sastra : Lagu, Tari Alat Musik, Film, Dll.</b></p></td>
              </tr>
              <tr>
                <td><h3>Kemampuan Penunjang :</h3>
                    <p>Komputer Software, Bakat Seni, Suka Berkarya, Bisa Menggambar dengan sangat baik (Bidang Visual Art).</p></td>
              </tr>
              <tr>
                <td><h3>Jurusan Yang Sesuai :</h3>
                    <p><b>Seni Rupa, Seni Tari, Seni Musik, Desain Komunikasi Visual, Desain Interior, Arsitektur, Bahasa.</b></p>
                </td>
              </tr>
            </tbody>
          </table>"); echo "$artistik";?></br></hr>
          <?php $sosial = ("<center><h2>$total3_format % SOSIAL (PENOLONG)</h2></center>
          <table class='table table-bordered table-striped table-hover'>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h3>Analisis Pribadi :</h3>
                    <p>Kepribadian yang suka berinteraksi dengan orang banyak sekalipun orang asing. Memiliki kemapuan kecakapan yang sangat baik. <b>Saat berbicara ia sangat mudah dimengerti, Ramah, dan Menyenangkan. Kepribadian yang sabar, Ramah, dan Simpati</b>.</p></td>
              </tr>
              <tr>
                <td><h3>Kemampuan Penunjang :</h3>
                    <p>Bahasa, Psikologi, Pendidikan, Leadership, Wawasan Luas, Suka Membaca, Suka Bergaul, Betah Mendengarkan Curhat, dan Pandai Memberi Solusi.</p></td>
              </tr>
              <tr>
                <td><h3>Jurusan Yang Sesuai :</h3>
                    <p><b>Psikologi, Bimbingan Konseling, Komunikasi, Sosiologi, Sekertaris, Guru PAUD dan SD.</b></p></td>
              </tr>
            </tbody>
          </table>"); echo "$sosial";?></br></hr>
          <?php $enterprishing = ("<center><h2>$total4_format % ENTERPRISING (PERAYU)</h2></center>
          <table class='table table-bordered table-striped table-hover'>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h3>Analisis Pribadi :</h3>
                    <p>Kepribadian yang suka mempengaruhi dengan memberi dukungan positif. Dikenal sebagai orang yang hebat saat berbicara dalam sebuah kelompok. Kepribadian tegas didukung dengan cara berbicara yang <b>Semangat, Efektif, dan Terstruktur</b> menjadian ia tepat sebagai <b>Pemimpin</b>.</p></td>
              </tr>
              <tr>
                <td><h3>Kemampuan Penunjang :</h3>
                    <p>Software Komputer, Negosiator, Ekspresif, Bahasa Asing.</p></td>
              </tr>
              <tr>
                <td><h3>Jurusan Yang Sesuai :</h3>
                    <p><b>Manajemen, Bisnis, Komunikasi, Hubungan Internasional, Marketing Komunkasi.</b></p></td>
              </tr>
            </tbody>
          </table>"); echo "$enterprishing";?></br></hr>
          <?php $konvensional = ("<center><h2>$total5_format % KONVENSIONAL (PENGELOLA)</h2></center>
          <table class='table table-bordered table-striped table-hover'>
            <thead>
              <tr>
                <th></th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td><h3>Analisis Pribadi :</h3>
                    <p>Kepribadian yang suka pada yang <b>Detail, Terorganisasi, dan Menginginkan Akurasi Tujuan yang Tinggi (Perfeksionis)</b>. Ia selalu mengikuti prosedur pekerjaan dengan teliti. Biasanya yang berhubungan dengan <b>Data atau Angka</b>.</p></td>
              </tr>
              <tr>
                <td><h3>Kemampuan Penunjang :</h3>
                    <p>Komputer Software, Matematika, Ekonomi, Manajemen.</p></td>
              </tr>
              <tr>
                <td><h3>Jurusan Yang Sesuai :</h3>
                    <p><b>Akuntansi, Statistik, Ekonomi, Administrasi, Programer (IT).</b></p></td>
              </tr>
            </tbody>
          </table>"); echo "$konvensional";?></br></hr>

        </div>
      </div>

          <center><h2>System menyimpulkan bahwa hasil akhir dari tes minat dan bakat jurusan kuliah kamu adalah : </h2></center>
                  <div class="row">
                    <div class="col-sm-3">
                    </div>
                      <div class="col-sm-6">
                  <br></hr>
                  <?php
                  $hasil=max($realistik,$investigatif,$artistik,$sosial,$enterprishing,$konvensional);
                  echo $hasil;?>
                </div>
              </div>
              <center><h3>Itulah hasil tes minat dan bakat kamu, semoga bermanfaat dikemudian hari..</h3></center>
          <center><a href="tes.php" class="btn btn-primary">
          <span class="glyphicon glyphicon-refresh">
          </span>
          Ulangi Tes?</a></center>
        </div>

          <br><br>
      </selection>

    <?php
    include ('footer.php');
     ?>
</html>
