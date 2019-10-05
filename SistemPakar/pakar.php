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
	  <link href="css/main.css" rel="stylesheet" type="text/css">
	  <link href="css/responsive.css" rel="stylesheet">
    <script src="validasi.js"></script>
    <style type="text/css">

    <script type="text/javascript">
     function periksatanya(){

       if (document.tanya.q.checked == true && document.tanya.q1.checked == true && document.tanya.q2.checked == true && document.tanya.q3.checked == true && document.tanya.q4.checked == true && document.tanya.q5.checked == true && document.tanya.q6.checked == true &&
       document.tanya.q7.checked == true && document.tanya.q8.checked == true && document.tanya.q9.checked == true && document.tanya.q10.checked == true && document.tanya.q11.checked == true && document.tanya.q12.checked == true && document.tanya.q13.checked == true &&
       document.tanya.q14.checked == true && document.tanya.q15.checked == true && document.tanya.q16.checked == true && document.tanya.q17.checked == true && document.tanya.q18.checked == true && document.tanya.q19.checked == true && document.tanya.q20.checked == true &&
       document.tanya.q21.checked == true && document.tanya.q22.checked == true && document.tanya.q23.checked == true && document.tanya.q24.checked == true && document.tanya.q25.checked == true && document.tanya.q26.checked == true && document.tanya.q27.checked == true &&
       document.tanya.q28.checked == true && document.tanya.q29.checked == true && document.tanya.q30.checked == true && document.tanya.q31.checked == true && document.tanya.q32.checked == true && document.tanya.q33.checked == true && document.tanya.q34.checked == true &&
       document.tanya.q35.checked == true && document.tanya.q36.checked == true && document.tanya.q37.checked == true && document.tanya.q38.checked == true && document.tanya.q39.checked == true && document.tanya.q40.checked == true && document.tanya.q41.checked == true) {

           alert("Harap Jawab Semua Pertanyaan Yang Ada!!!");
           return false;

       }
     }
    </script>



    form{padding:20px;}
    form label{
    display:inline-block;
    position:relative;
    cursor:pointer;
    line-height:30px;
    vertical-align: top;}

    /*MULAI MENDESAIN CUSTOM CHECKBOX DAN RADIO BUTTON*/
    form .form-check{
    display:inline-block;
    position:relative;
    width:50px;
    height:25px;}

    form .form-check::before{
    content:"";
    display:inline-block;
    position:relative;
    width:50px;
    height:25px;
    background:#fff;
    border:1px solid #ddd;
    border-radius:30px; -moz-border-radius:30px;}
    form .form-check::after{
    content:"";
    display:inline-block;
    position:absolute;
    width:21px;
    height:21px;
    border-radius:25px; -moz-border-radius:25px;
    background:#eee;
    left:3px;
    top:3px;
    transition:0.3s; -moz-transition:0.3s; -webkit-transition:0.3s; -khtml-transition:0.3s;}
    form .form-check:checked::after{
    left:27px;
    background:#33aa55;}
    /*posisi leftnya dikira-kira aja sesuai kebutuhan~
    warna background diubah ke warna yang berwarna sbg pertanda
    checkbox tersebut aktif*/
    form .form-radio{display:none;}
    form .form-radio + label{padding-left:35px;}
    form .form-radio + label::before{
    content:"";
    position:absolute;
    left:0px;
    display:inline-block;
    width:25px;
    height:25px;
    background:#fff;
    margin-right:5px;
    border:1px solid #ddd;
    border-radius:50%; -moz-border-radius:50%;
    box-shadow:2px 2px 2px #bbb; -moz-box-shadow:2px 2px 2px #bbb;
    transition:0.3s; -moz-transition:0.3s; -webkit-transition:0.3s; -khtml-transition:0.3s;}
    form .form-radio:checked + label::before{
    background:#34A8BF;
    border:5px solid #fff;
    width:17px;
    height:17px;}
    </style>

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
                      <h2>Selamat datang <b><?php if (isset($_GET['nama'])) {
                        $nama=$_GET['nama'];
                          $nama=htmlspecialchars($nama);
                      }else {
                        header("Location:tes.php?error=variabe_belum_diset");
                      }
                      if (empty($nama)) {
                        header("Location:tes.php?error=nama_kosong");
                      }else {
                        if (is_numeric($nama)) {
                          header("Location:tes.php?error=nama_harus_huruf");
                        }else {
                          echo "$nama";
                        }
                      } ?></b></h2>
                     <h2>Silahkan kamu jawab pertanyaan berikut menurut pendapat kamu.</h2>
                   </div>
                 </div>
               </div><!--/.row-->
           </div><!--/.container-->
       </section><!--/#contact-page-->
       ``
       <section id="bottom">
           <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
               <div class="row">
                 <form id="tes" action="hasil.php" method="post" name="tanya" onsubmit="return periksatanya()">
                   <center><h3><b>Pertanyaan</b></h3></center>
                   <input type="radio" class="form-radio" name="" value="">
                   <div class="col-sm-1">
               		</div>
                   <div class="col-sm-10">
                       <div class="jumbotron">
                         <hr/>
                       <?php
                       $n = 42;
                         $links=array('<b>saya bisa menganalisa semua hal (masalah, situasi, prilaku manusia, dll)<b><br><hr/>
                               <input type="radio" class="form-radio" name="q" value="selalu" id="q"><label for="q">selalu</label>
                               <input type="radio" class="form-radio" name="q" value="sering" id="q1"><label for="q1">sering</label>
                               <input type="radio" class="form-radio" name="q" value="jarang" id="q2"><label for="q2">jarang</label>
                               <input type="radio" class="form-radio" name="q" value="tidak" id="q3"><label for="q3">tidak pernah</label><br><hr/>',

                               '<b>teman-teman saya bilang kalau saya adalah orang yang kreatif<b><br><hr/>
                               <input type="radio" class="form-radio" name="q1" value="selalu" id="a"><label for="a">selalu</label>
                               <input type="radio" class="form-radio" name="q1" value="sering" id="a1"><label for="a1">sering</label>
                               <input type="radio" class="form-radio" name="q1" value="jarang" id="a2"><label for="a2">jarang</label>
                               <input type="radio" class="form-radio" name="q1" value="tidak" id="a3"><label for="a3">tidak pernah</label><br><hr/>',

                               '<b>saya bisa membongkar sesuatu dan bisa memasangnya kembali<b><br><hr/>
                               <input type="radio" class="form-radio" name="q2" value="selalu" id="q4"><label for="q4">selalu</label>
                               <input type="radio" class="form-radio" name="q2" value="sering" id="q5"><label for="q5">sering</label>
                               <input type="radio" class="form-radio" name="q2" value="jarang" id="q6"><label for="q6">jarang</label>
                               <input type="radio" class="form-radio" name="q2" value="tidak" id="q7"><label for="q7">tidak pernah</label><br><hr/>',

                               '<b>saya bisa beradaptasi dengan cepat di lingkungan yang baru</b><br><hr/>
                               <input type="radio" class="form-radio" name="q3" value="selalu" id="a4"><label for="a4">selalu</label>
                               <input type="radio" class="form-radio" name="q3" value="sering" id="a5"><label for="a5">sering</label>
                               <input type="radio" class="form-radio" name="q3" value="jarang" id="a6"><label for="a6">jarang</label>
                               <input type="radio" class="form-radio" name="q3" value="tidak" id="a7"><label for="a7">tidak pernah</label><br><hr/>',

                               '<b>saya lebih memilih mengerjakan sesuatu sendirian daripada bekerja dengan tim</b><br><hr/>
                               <input type="radio" class="form-radio" name="q4" value="selalu" id="403"><label for="403">selalu</label>
                               <input type="radio" class="form-radio" name="q4" value="sering" id="402"><label for="402">sering</label>
                               <input type="radio" class="form-radio" name="q4" value="jarang" id="401"><label for="401">jarang</label>
                               <input type="radio" class="form-radio" name="q4" value="tidak" id="4"><label for="4">tidak pernah</label><br><hr/>',

                               '<b>saya orang yang prkatis, lebih senang langsung bekerja daripada banyak bicara/diskusi</b><br><hr/>
                               <input type="radio" class="form-radio" name="q5" value="selalu" id="5"><label for="5">selalu</label>
                               <input type="radio" class="form-radio" name="q5" value="sering" id="501"><label for="501">sering</label>
                               <input type="radio" class="form-radio" name="q5" value="jarang" id="502"><label for="502">jarang</label>
                               <input type="radio" class="form-radio" name="q5" value="tidak" id="503"><label for="503">tidak pernah</label><br><hr/>',

                               '<b>saya suka menulis(cerita, puisi, cerpen, pantun, dll) di buku diary atau di blog</b><br><hr/>
                               <input type="radio" class="form-radio" name="q6" value="selalu" id="6"><label for="6">selalu</label>
                               <input type="radio" class="form-radio" name="q6" value="sering" id="601"><label for="601">sering</label>
                               <input type="radio" class="form-radio" name="q6" value="jarang" id="602"><label for="602">jarang</label>
                               <input type="radio" class="form-radio" name="q6" value="tidak" id="603"><label for="603">tidak pernah</label><br><hr/>',

                               '<b>saya bisa membuat, membangun atau merancang sesuatu</b><br><hr/>
                               <input type="radio" class="form-radio" name="q7" value="selalu" id="7"><label for="7">selalu</label>
                               <input type="radio" class="form-radio" name="q7" value="sering" id="701"><label for="701">sering</label>
                               <input type="radio" class="form-radio" name="q7" value="jarang" id="702"><label for="702">jarang</label>
                               <input type="radio" class="form-radio" name="q7" value="tidak" id="703"><label for="703">tidak pernah</label><br><hr/>',

                               '<b>saya bisa mengutak-atik perangkat elektronik/mesin</b><br><hr/>
                               <input type="radio" class="form-radio" name="q8" value="selalu" id="8"><label for="8">selalu</label>
                               <input type="radio" class="form-radio" name="q8" value="sering" id="801"><label for="801">sering</label>
                               <input type="radio" class="form-radio" name="q8" value="jarang" id="802"><label for="802">jarang</label>
                               <input type="radio" class="form-radio" name="q8" value="tidak" id="803"><label for="803">tidak pernah</label><br><hr/>',

                               '<b>saya suka mencari tahu bagaimana sebuah benda bekerja serta hubungan sebab akibat terhadap lingkungan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q9" value="selalu" id="9"><label for="9">selalu</label>
                               <input type="radio" class="form-radio" name="q9" value="sering" id="909"><label for="909">sering</label>
                               <input type="radio" class="form-radio" name="q9" value="jarang" id="999"><label for="999">jarang</label>
                               <input type="radio" class="form-radio" name="q9" value="tidak" id="9999"><label for="9999">tidak pernah</label><br><hr/>',

                               '<b>saya lebih memilih bekerja bersama tim daripada sendiri</b><br><hr/>
                               <input type="radio" class="form-radio" name="q10" value="selalu" id="0"><label for="0">selalu</label>
                               <input type="radio" class="form-radio" name="q10" value="sering" id="00"><label for="00">sering</label>
                               <input type="radio" class="form-radio" name="q10" value="jarang" id="000"><label for="000">jarang</label>
                               <input type="radio" class="form-radio" name="q10" value="tidak" id="0000"><label for="0000">tidak pernah</label><br><hr/>',

                               '<b>saya lebih memilih bekerja dibalik meja atau di kantor daripada di lapangan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q11" value="selalu" id="1"><label for="1">selalu</label>
                               <input type="radio" class="form-radio" name="q11" value="sering" id="121"><label for="121">sering</label>
                               <input type="radio" class="form-radio" name="q11" value="jarang" id="111"><label for="111">jarang</label>
                               <input type="radio" class="form-radio" name="q11" value="tidak" id="1111"><label for="1111">tidak pernah</label><br><hr/>',

                               '<b>saya bisa menjual sesuatu ke orang lain, dan orang itu mau membelinya</b><br><hr/>
                               <input type="radio" class="form-radio" name="q12" value="selalu" id="2"><label for="2">selalu</label>
                               <input type="radio" class="form-radio" name="q12" value="sering" id="212"><label for="212">sering</label>
                               <input type="radio" class="form-radio" name="q12" value="jarang" id="222"><label for="222">jarang</label>
                               <input type="radio" class="form-radio" name="q12" value="tidak" id="2222"><label for="2222">tidak pernah</label><br><hr/>',

                               '<b>saya suka pelajaran yang berhubungan dengan sains, astronomi, dan matemeatika</b><br><hr/>
                               <input type="radio" class="form-radio" name="q13" value="selalu" id="103"><label for="103">selalu</label>
                               <input type="radio" class="form-radio" name="q13" value="sering" id="131"><label for="131">sering</label>
                               <input type="radio" class="form-radio" name="q13" value="jarang" id="1313"><label for="1313">jarang</label>
                               <input type="radio" class="form-radio" name="q13" value="tidak" id="13131"><label for="13131">tidak pernah</label><br><hr/>',

                               '<b>saya bisa menggambar, melukis, atau membuat desain grafik</b><br><hr/>
                               <input type="radio" class="form-radio" name="q14" value="selalu" id="104"><label for="104">selalu</label>
                               <input type="radio" class="form-radio" name="q14" value="sering" id="141"><label for="141">sering</label>
                               <input type="radio" class="form-radio" name="q14" value="jarang" id="1414"><label for="1414">jarang</label>
                               <input type="radio" class="form-radio" name="q14" value="tidak" id="14141"><label for="14141">tidak pernah</label><br><hr/>',

                               '<b>saya bisa duduk lama di kursi dalam rangka mengerjakan tugas dan tidak merasa bosan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q15" value="selalu" id="105"><label for="105">selalu</label>
                               <input type="radio" class="form-radio" name="q15" value="sering" id="151"><label for="151">sering</label>
                               <input type="radio" class="form-radio" name="q15" value="jarang" id="1515"><label for="1515">jarang</label>
                               <input type="radio" class="form-radio" name="q15" value="tidak" id="15151"><label for="15151">tidak pernah</label><br><hr/>',

                               '<b>saya suka menjadi sekertaris, mengetik surat dan membuat laporan-laporan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q16" value="selalu" id="106"><label for="106">selalu</label>
                               <input type="radio" class="form-radio" name="q16" value="sering" id="161"><label for="161">sering</label>
                               <input type="radio" class="form-radio" name="q16" value="jarang" id="1616"><label for="1616">jarang</label>
                               <input type="radio" class="form-radio" name="q16" value="tidak" id="16161"><label for="16161">tidak pernah</label><br><hr/>',

                               '<b>saya bisa mengajar dan melatih orang lain</b><br><hr/>
                               <input type="radio" class="form-radio" name="q17" value="selalu" id="107"><label for="107">selalu</label>
                               <input type="radio" class="form-radio" name="q17" value="sering" id="171"><label for="171">sering</label>
                               <input type="radio" class="form-radio" name="q17" value="jarang" id="1717"><label for="1717">jarang</label>
                               <input type="radio" class="form-radio" name="q17" value="tidak" id="17171"><label for="17171">tidak pernah</label><br><hr/>',

                               '<b>saya lebih memilih bekerja di luar lapangan daripada dibalik meja</b><br><hr/>
                               <input type="radio" class="form-radio" name="q18" value="selalu" id="108"><label for="108">selalu</label>
                               <input type="radio" class="form-radio" name="q18" value="sering" id="181"><label for="181">sering</label>
                               <input type="radio" class="form-radio" name="q18" value="jarang" id="1818"><label for="1818">jarang</label>
                               <input type="radio" class="form-radio" name="q18" value="tidak" id="18181"><label for="18181">tidak pernah</label><br><hr/>',

                               '<b>saya bisa berbicara dan berpidato di depan orang banyak</b><br><hr/>
                               <input type="radio" class="form-radio" name="q19" value="selalu" id="109"><label for="109">selalu</label>
                               <input type="radio" class="form-radio" name="q19" value="sering" id="191"><label for="191">sering</label>
                               <input type="radio" class="form-radio" name="q19" value="jarang" id="1919"><label for="1919">jarang</label>
                               <input type="radio" class="form-radio" name="q19" value="tidak" id="19191"><label for="19191">tidak pernah</label><br><hr/>',

                               '<b>saya bia mempengaruhi dan membujuk orang lain untuk mengikuti apa yang saya ucapkan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q20" value="selalu" id="10"><label for="10">selalu</label>
                               <input type="radio" class="form-radio" name="q20" value="sering" id="11"><label for="11">sering</label>
                               <input type="radio" class="form-radio" name="q20" value="jarang" id="12"><label for="12">jarang</label>
                               <input type="radio" class="form-radio" name="q20" value="tidak" id="13"><label for="13">tidak pernah</label><br><hr/>',

                               '<b>saya suka mempelajari budaya, adat istiadat dan kebiasaan orang lain</b><br><hr/>
                               <input type="radio" class="form-radio" name="q21" value="selalu" id="14"><label for="14">selalu</label>
                               <input type="radio" class="form-radio" name="q21" value="sering" id="15"><label for="15">sering</label>
                               <input type="radio" class="form-radio" name="q21" value="jarang" id="16"><label for="16">jarang</label>
                               <input type="radio" class="form-radio" name="q21" value="tidak" id="17"><label for="17">tidak pernah</label><br><hr/>',

                               '<b>saya suka sesuatu yang berbau karya seni(lukisan, kerajinan tangan, dan patung)</b><br><hr/>
                               <input type="radio" class="form-radio" name="q22" value="selalu" id="18"><label for="18">selalu</label>
                               <input type="radio" class="form-radio" name="q22" value="sering" id="19"><label for="19">sering</label>
                               <input type="radio" class="form-radio" name="q22" value="jarang" id="20"><label for="20">jarang</label>
                               <input type="radio" class="form-radio" name="q22" value="tidak" id="21"><label for="21">tidak pernah</label><br><hr/>',

                               '<b>saya suka mengurung diri di kamar dan melakukan eksperimen</b><br><hr/>
                               <input type="radio" class="form-radio" name="q23" value="selalu" id="22"><label for="22">selalu</label>
                               <input type="radio" class="form-radio" name="q23" value="sering" id="23"><label for="23">sering</label>
                               <input type="radio" class="form-radio" name="q23" value="jarang" id="24"><label for="24">jarang</label>
                               <input type="radio" class="form-radio" name="q23" value="tidak" id="25"><label for="25">tidak pernah</label><br><hr/>',

                               '<b>saya pandai dalam bidang matematika dan logika</b><br><hr/>
                               <input type="radio" class="form-radio" name="q24" value="selalu" id="26"><label for="26">selalu</label>
                               <input type="radio" class="form-radio" name="q24" value="sering" id="27"><label for="27">sering</label>
                               <input type="radio" class="form-radio" name="q24" value="jarang" id="28"><label for="28">jarang</label>
                               <input type="radio" class="form-radio" name="q24" value="tidak" id="29"><label for="29">tidak pernah</label><br><hr/>',

                               '<b>saya suka berdiskusi dengan orang lain jika ada masalah</b><br><hr/>
                               <input type="radio" class="form-radio" name="q25" value="selalu" id="30"><label for="30">selalu</label>
                               <input type="radio" class="form-radio" name="q25" value="sering" id="31"><label for="31">sering</label>
                               <input type="radio" class="form-radio" name="q25" value="jarang" id="32"><label for="32">jarang</label>
                               <input type="radio" class="form-radio" name="q25" value="tidak" id="33"><label for="33">tidak pernah</label><br><hr/>',

                               '<b>saya membuat agenda dan daftar kegiatan yang harus dilakukan hari ini, bulan ini, dan tahun ini</b><br><hr/>
                               <input type="radio" class="form-radio" name="q26" value="selalu" id="34"><label for="34">selalu</label>
                               <input type="radio" class="form-radio" name="q26" value="sering" id="35"><label for="35">sering</label>
                               <input type="radio" class="form-radio" name="q26" value="jarang" id="36"><label for="36">jarang</label>
                               <input type="radio" class="form-radio" name="q26" value="tidak" id="37"><label for="37">tidak pernah</label><br><hr/>',

                               '<b>saya bisa bermain alat musik</b><br><hr/>
                               <input type="radio" class="form-radio" name="q27" value="selalu" id="38"><label for="38">selalu</label>
                               <input type="radio" class="form-radio" name="q27" value="sering" id="39"><label for="39">sering</label>
                               <input type="radio" class="form-radio" name="q27" value="jarang" id="40"><label for="40">jarang</label>
                               <input type="radio" class="form-radio" name="q27" value="tidak" id="41"><label for="41">tidak pernah</label><br><hr/>',

                               '<b>saya bisa memasak makanan sendiri</b><br><hr/>
                               <input type="radio" class="form-radio" name="q28" value="selalu" id="42"><label for="42">selalu</label>
                               <input type="radio" class="form-radio" name="q28" value="sering" id="43"><label for="43">sering</label>
                               <input type="radio" class="form-radio" name="q28" value="jarang" id="44"><label for="44">jarang</label>
                               <input type="radio" class="form-radio" name="q28" value="tidak" id="45"><label for="45">tidak pernah</label><br><hr/>',

                               '<b>saya suka bermain teka-teki atau puzzle</b><br><hr/>
                               <input type="radio" class="form-radio" name="q29" value="selalu" id="46"><label for="46">selalu</label>
                               <input type="radio" class="form-radio" name="q29" value="sering" id="47"><label for="47">sering</label>
                               <input type="radio" class="form-radio" name="q29" value="jarang" id="48"><label for="48">jarang</label>
                               <input type="radio" class="form-radio" name="q29" value="tidak" id="49"><label for="49">tidak pernah</label><br><hr/>',

                               '<b>saya suka mengatur, mengelola, dan menata sesuatu. saya tidak suka berantakan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q30" value="selalu" id="50"><label for="50">selalu</label>
                               <input type="radio" class="form-radio" name="q30" value="sering" id="51"><label for="51">sering</label>
                               <input type="radio" class="form-radio" name="q30" value="jarang" id="52"><label for="52">jarang</label>
                               <input type="radio" class="form-radio" name="q30" value="tidak" id="53"><label for="53">tidak pernah</label><br><hr/>',

                               '<b>saya bisa menjadi pemimpin yang diandalkan</b><br><hr/>
                               <input type="radio" class="form-radio" name="q31" value="selalu" id="54"><label for="54">selalu</label>
                               <input type="radio" class="form-radio" name="q31" value="sering" id="55"><label for="55">sering</label>
                               <input type="radio" class="form-radio" name="q31" value="jarang" id="56"><label for="56">jarang</label>
                               <input type="radio" class="form-radio" name="q31" value="tidak" id="57"><label for="57">tidak pernah</label><br><hr/>',

                               '<b>orang mendatangi saya jika sedang ada masalah dan saya bisa menolong mereka</b><br><hr/>
                               <input type="radio" class="form-radio" name="q32" value="selalu" id="58"><label for="58">selalu</label>
                               <input type="radio" class="form-radio" name="q32" value="sering" id="59"><label for="59">sering</label>
                               <input type="radio" class="form-radio" name="q32" value="jarang" id="60"><label for="60">jarang</label>
                               <input type="radio" class="form-radio" name="q32" value="tidak" id="61"><label for="61">tidak pernah</label><br><hr/>',

                               '<b>saya orang yang detail. saya butuh penjelasan yang panjang lebar agar saya mengerti</b><br><hr/>
                               <input type="radio" class="form-radio" name="q33" value="selalu" id="62"><label for="62">selalu</label>
                               <input type="radio" class="form-radio" name="q33" value="sering" id="63"><label for="63">sering</label>
                               <input type="radio" class="form-radio" name="q33" value="jarang" id="64"><label for="64">jarang</label>
                               <input type="radio" class="form-radio" name="q33" value="tidak" id="65"><label for="65">tidak pernah</label><br><hr/>',

                               '<b>saya punya target dan pencapaian diri setiap hari, bulan dan tahun</b><br><hr/>
                               <input type="radio" class="form-radio" name="q34" value="selalu" id="66"><label for="66">selalu</label>
                               <input type="radio" class="form-radio" name="q34" value="sering" id="67"><label for="67">sering</label>
                               <input type="radio" class="form-radio" name="q34" value="jarang" id="68"><label for="68">jarang</label>
                               <input type="radio" class="form-radio" name="q34" value="tidak" id="69"><label for="69">tidak pernah</label><br><hr/>',

                               '<b>saya bisa memelihara hewan dan bercocok tanam</b><br><hr/>
                               <input type="radio" class="form-radio" name="q35" value="selalu" id="70"><label for="70">selalu</label>
                               <input type="radio" class="form-radio" name="q35" value="sering" id="71"><label for="71">sering</label>
                               <input type="radio" class="form-radio" name="q35" value="jarang" id="72"><label for="72">jarang</label>
                               <input type="radio" class="form-radio" name="q35" value="tidak" id="73"><label for="73">tidak pernah</label><br><hr/>',

                               '<b>saya bisa menjadi panutan dan contoh orang lain</b><br><hr/>
                               <input type="radio" class="form-radio" name="q36" value="selalu" id="74"><label for="74">selalu</label>
                               <input type="radio" class="form-radio" name="q36" value="sering" id="75"><label for="75">sering</label>
                               <input type="radio" class="form-radio" name="q36" value="jarang" id="76"><label for="76">jarang</label>
                               <input type="radio" class="form-radio" name="q36" value="tidak" id="77"><label for="77">tidak pernah</label><br><hr/>',

                               '<b>saya suka merawat orang lain yang sedang sakit</b><br><hr/>
                               <input type="radio" class="form-radio" name="q37" value="selalu" id="78"><label for="78">selalu</label>
                               <input type="radio" class="form-radio" name="q37" value="sering" id="79"><label for="79">sering</label>
                               <input type="radio" class="form-radio" name="q37" value="jarang" id="80"><label for="80">jarang</label>
                               <input type="radio" class="form-radio" name="q37" value="tidak" id="81"><label for="81">tidak pernah</label><br><hr/>',

                               '<b>untuk melakukan atau mengerjakan sesuatu saya membutuhkan buku panduan yang tertulis dan jelas</b><br><hr/>
                               <input type="radio" class="form-radio" name="q38" value="selalu" id="82"><label for="82">selalu</label>
                               <input type="radio" class="form-radio" name="q38" value="sering" id="83"><label for="83">sering</label>
                               <input type="radio" class="form-radio" name="q38" value="jarang" id="84"><label for="84">jarang</label>
                               <input type="radio" class="form-radio" name="q38" value="tidak" id="85"><label for="85">tidak pernah</label><br><hr/>',

                               '<b>saya bisa memberika saran yang tepat kepada orang yang punya masalah</b><br><hr/>
                               <input type="radio" class="form-radio" name="q39" value="selalu" id="86"><label for="86">selalu</label>
                               <input type="radio" class="form-radio" name="q39" value="sering" id="87"><label for="87">sering</label>
                               <input type="radio" class="form-radio" name="q39" value="jarang" id="88"><label for="88">jarang</label>
                               <input type="radio" class="form-radio" name="q39" value="tidak" id="89"><label for="89">tidak pernah</label><br><hr/>',

                               '<b>saya bisa bermain akting, drama atau sandiwara</b><br><hr/>
                               <input type="radio" class="form-radio" name="q40" value="selalu" id="90"><label for="90">selalu</label>
                               <input type="radio" class="form-radio" name="q40" value="sering" id="91"><label for="91">sering</label>
                               <input type="radio" class="form-radio" name="q40" value="jarang" id="92"><label for="92">jarang</label>
                               <input type="radio" class="form-radio" name="q40" value="tidak" id="93"><label for="93">tidak pernah</label><br><hr/>',

                               '<b>saya bisa bekerja dengan angka, rumus, grafik, serta perhitungan matematis dan ekonomi</b><br><hr/>
                               <input type="radio" class="form-radio" name="q41" value="selalu" id="94"><label for="94">selalu</label>
                               <input type="radio" class="form-radio" name="q41" value="sering" id="95"><label for="95">sering</label>
                               <input type="radio" class="form-radio" name="q41" value="jarang" id="96"><label for="96">jarang</label>
                               <input type="radio" class="form-radio" name="q41" value="tidak" id="97"><label for="97">tidak pernah</label><br><hr/>',
                             );
                             $rand_keys = array_rand($links, $n);
                             echo "<center>". "<br><table><tr><td>";

                             echo "1.&nbsp;". $links[$rand_keys[0]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "2.&nbsp;". $links[$rand_keys[1]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "3.&nbsp;". $links[$rand_keys[2]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "4.&nbsp;". $links[$rand_keys[3]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "5.&nbsp;". $links[$rand_keys[4]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "6.&nbsp;". $links[$rand_keys[5]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "7.&nbsp;". $links[$rand_keys[6]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "8.&nbsp;". $links[$rand_keys[7]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "9.&nbsp;". $links[$rand_keys[8]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "10.&nbsp;". $links[$rand_keys[9]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "11.&nbsp;". $links[$rand_keys[10]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "12.&nbsp;". $links[$rand_keys[11]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "13.&nbsp;". $links[$rand_keys[12]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "14.&nbsp;". $links[$rand_keys[13]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "15.&nbsp;". $links[$rand_keys[14]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "16.&nbsp;". $links[$rand_keys[15]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "17.&nbsp;". $links[$rand_keys[16]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "18.&nbsp;". $links[$rand_keys[17]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "19.&nbsp;". $links[$rand_keys[18]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "20.&nbsp;". $links[$rand_keys[19]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "21.&nbsp;". $links[$rand_keys[20]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "22.&nbsp;". $links[$rand_keys[21]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "23.&nbsp;". $links[$rand_keys[22]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "24.&nbsp;". $links[$rand_keys[23]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "25.&nbsp;". $links[$rand_keys[24]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "26.&nbsp;". $links[$rand_keys[25]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "27.&nbsp;". $links[$rand_keys[26]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "28.&nbsp;". $links[$rand_keys[27]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "29.&nbsp;". $links[$rand_keys[28]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "30.&nbsp;". $links[$rand_keys[29]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "31.&nbsp;". $links[$rand_keys[30]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "32.&nbsp;". $links[$rand_keys[31]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "33.&nbsp;". $links[$rand_keys[32]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "34.&nbsp;". $links[$rand_keys[33]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "35.&nbsp;". $links[$rand_keys[34]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "36.&nbsp;". $links[$rand_keys[35]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "37.&nbsp;". $links[$rand_keys[36]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "38.&nbsp;". $links[$rand_keys[37]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "39.&nbsp;". $links[$rand_keys[38]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "40.&nbsp;". $links[$rand_keys[39]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "41.&nbsp;". $links[$rand_keys[40]] . "<br>";
                             echo "</td></tr><tr><td>";
                             echo "42.&nbsp;". $links[$rand_keys[41]] . "<br>";

                             echo "</td></tr></table>";
                             echo "<center>". "<br>";

                        ?>
                        <hr/>
                      </div>
                     </div>
                     </div>
                   <center>
                     <input name="cmdSubmit" type="submit" class="btn btn-success" id="cmdSubmit" value="cek hasil >>>"/>
                     <!-- <input type="hidden" name="quest" value="quiz00.php" > -->
                   </center>
                 </form>
               </div>
           </section><!--/#bottom-->


     <?php
     include ('footer.php');
      ?>

</html>
