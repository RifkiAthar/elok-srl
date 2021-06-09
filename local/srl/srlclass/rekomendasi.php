<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/rekomendasi.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Rekomendasi');

 echo $OUTPUT->header();

 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
 
     <title>Pilihan Strategi Belajar</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="card mt-3 w-100" style="border-width: 0px !important;">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-arrow p-0">
               <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
               <li class="breadcrumb-item pl-0"><a href="#">Mata Kuliah</a></li>
               <li aria-current="page" class="breadcrumb-item active">Strategi Belajar</li>
             </ol>
           </nav>
         </div>
       </div>
       <div class="row justify-content-center">
         <div class="card mt-4" style="max-width: 760px;">
             <div class="row no-gutters">
               <div class="col-md-4>">
                 <img src="img/ic_virtual tutor.png" class="card-img-center m-3 ml-4" alt="Virtual Tutor" width="200px" height="200px">
               </div>
               <div class="col-md-8">
                 <div class="card-body">
                   <h5 class="card-text-nt mt-2">
                     <ul class="list-inline">
                       <li class="list-inline-item" style="color: black;">Rekomendasi Strategi Belajar:</li>
                       <li class="list-inline-item">Mind Mapping</li>
                     </ul></h5>
                   <p class="card-text">Berdasarkan hasil tes gaya belajar, kamu termasuk pembelajar tipe visual yang menyukai visualisasi berupa garis, diagram, dan representasi data visual lainnya.</p>
                   <p class="card-text">Pembelajar tipe visual juga membaca dan mengembangkan konstruksi konten di luar kata-kata.</p>
                 </div>
               </div>
             </div>
         </div>
         <div class="row justify-content-center mb-4 mt-4">
           <div class="col-md-3 mr-5 mt-5">
             <div class="card h-100">
               <img src="img/ic_control video.svg" class="card-img-top mt-4" alt="Control Video" width="200px" height="170px">
               <div class="card-body text-center">
                 <h5 class="card-text-nt">Control Video</h5>
                 <p class="card-text">Melalui strategi belajar ini, tersedia media pembelajaran audio visual berupa video penjelasan materi.</p>
                 <a href="controlvideo.php" class="btn btn-primary btn-block" style="font-weight: bold;">PILIH</a>
               </div>
             </div>
           </div>
           <div class="col-md-3 mr-5 mt-5">
             <div class="card h-100">
               <img src="img/ic_summarization.svg" class="card-img-top mt-4" alt="Summarization" width="170px" height="170px">
               <div class="card-body text-center">
                 <h5 class="card-text-nt">Summarization</h5>
                 <p class="card-text">Melalui strategi belajar ini, tersedia modul materi dan ruang untuk membuat rangkuman berupa tulisan.</p>
                 <a href="summarization.php" class="btn btn-primary btn-block" style="font-weight: bold;">PILIH</a>
               </div>
             </div>
           </div>
           <div class="col-md-3 mt-2>">
             <div class="card h-100">
               <h5 class="card-header text-center" style="color: white; background-color: #3CADC9; border-color: #3CADC9;">Rekomendasi</h5>
               <img src="img/ic_mind mapping.svg" class="card-img-top mt-4" alt="Mind Mapping" width="170px" height="170px">
               <div class="card-body text-center">
                 <h5 class="card-text-nt">Mind Mapping</h5>
                 <p class="card-text">Melalui strategi belajar ini, tersedia slide materi dan ruang untuk membuat rangkuman gambar.</p>
                 <a href="mindmapping.php" class="btn btn-primary btn-block" style="font-weight: bold;">PILIH</a>
               </div>
             </div>
           </div>
       </div>
     </div>
     
 
     <!-- Optional JavaScript; choose one of the two! -->
 
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
 </html>

 <?php
 echo $OUTPUT->footer();
 ?>