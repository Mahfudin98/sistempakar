<?php
  if (isset($_GET['error'])) {
    $error=$_GET['error'];
  }else {
    $error="";
  }

  $pesan="";
  if ($error=="variabel_belum_diset") {
    $pesan="<h3>Maaf, anda harus mengakses halaman ini dari tes.php</h3>";
  }
  if ($error=="nama_kosong") {
    $pesan="<h3>Maaf, Anda harus mengisi nama</h3>";
  }
  if ($error=="nama_harus_huruf") {
    $pesan="<h3>Maaf, nama harus berupa huruf</h3>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="gambar/icon.ico">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tes minat dan bakat jurusan kuliah</title>

    <!-- Bootstrap -->
    <meta name="description" content="Custom Login Form Styling with CSS3" />
    <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/font-awesome.min.css">
	  <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
	  <link href="css/main.css" rel="stylesheet">
	  <link href="css/responsive.css" rel="stylesheet">



    <?php
    include ('header.php');
     ?>
   </br></br>

   </header>

   <section class="main">
     <div class="center wow fadeInDown">
       <h1>Silahkan <strong>kamu input</strong> nama kamu</h1>
       <h2>Agar bisa masuk kehalaman berikutnya!.</h2>

       <div class="support-note">
         <span class="note-ie">Sorry, only modern browsers.</span>
       </div>
       <form class="form-1" action="pakar.php" method="get">
         <p class="field">
           <input type="text" name="nama" placeholder="Silahkan isi nama kamu">
           <i class="icon-user icon-large"></i>
         </p>
           <button type="submit" name="Submit"><i class="icon-arrow-right icon-large"></i></button>
       </form>
     </div>
   </section>
    <?php echo $pesan; ?>
     <?php
     include ('footer.php');
      ?>
</html>
