<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/forumdiskusi.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('SRL Class');

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
 
     <title>Forum Diskusi: Algoritme dan Struktur Data</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="card mt-4 w-100" style="border-width: 0px !important;">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-arrow p-0">
               <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
               <li class="breadcrumb-item pl-0"><a href="#">Mata Kuliah</a></li>
               <li aria-current="page" class="breadcrumb-item active">Forum Diskusi</li>
             </ol>
           </nav>
         </div>
       </div>
     <div class="row">
         <div class="card-course w-100 mt-4">
             <div class="row no-gutters">
             <div class="col-md-2>">
                 <img src="img/ASD.png" class="card-img-center ml-4 mt-4" alt="Algoritme dan Struktur Data" width="100px" height="100px">
             </div>
             <div class="col-md-10">
                 <div class="card-body">
                     <h5 class="card-text-nt m-1">ALGORITME DAN STRUKTUR DATA</h5>
                     <p class="card-text-course m-1">Dr. Indriana Hidayah, S.T., M.T.</p>
                     <p class="card-text-course m-1">Semester Ganjil 2020/2021</p>
                     <p class="card-text-course m-1">TIF 141</p>
                 </div>
             </div>
             </div>
           </div>
     </div>
     <div class="row">
       <div class="card w-75 mt-4">
         <ul class="nav navbar nav-justified">
           <li class="nav-item">
             <a class="nav-link" href="index.php">Materi Kuliah</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="evaluasinonmandiri.php">Evaluasi Non Mandiri</a>
           </li>
           <li class="nav-item">
             <a class="nav-link active" href="#">Forum Diskusi</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="hasilbelajar.php">Hasil Belajar</a>
           </li>
         </ul>
       <div class="container px-5">
           <div class="card w-100 mt-5 mb-5">
               <div class="row no-gutters">
               <div class="col-md-2">
                 <div class="profile-image m-4"><img class="rounded-circle" src="img/Gita.png" width="75"></div>
               </div>
               <div class="col-md-10 mt-4">
                 <div class="mb-3 mr-4">
                   <textarea class="form-control" id="form-forum" rows="3" placeholder="Tulis pertanyaanmu"></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary float-right mb-4 mr-4" disabled style="font-weight: bold;">KIRIM</button>
               </div>
               </div>
               </div>
               <div class="card w-100 mb-5">
                 <div class="col-md-12">
                   <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-3">
                       <div class="profile-image mt-3 mb-3"><img class="rounded-circle" src="img/Joshua.png" width="75"></div>
                       <div class="d-flex flex-column ml-3">
                           <div class="d-flex flex-row">
                               <h6 style="color: #EFA30A;" class="mt-3">Joshua Putra</h6>
                           </div>
                           <div class="d-flex flex-row">
                             <div class="card-text">Apakah ada yang belum dapat kelompok untuk tugas minggu depan?</div>
                         </div>
                           <div class="d-flex flex-row align-items-center align-content-center small mt-1 mb-3">23 April 2021, 10.00</div>
                       </div>
                   </div>
                   <div class="coment-bottom px-2">
                       <div class="d-flex flex-row add-comment-section mt-4 mb-4"><img class="img-fluid img-responsive rounded-circle mr-2" src="img/Gita.png" width="38"><input type="text" class="form-control mr-3" placeholder="Tulis komentar"><button class="btn btn-primary" disabled type="submit" style="font-weight: bold;">KIRIM</button></div>
                       <div class="d-flex flex-row align-items-center text-left comment-top p-2 border-bottom px-5 ml-5">
                         <div class="profile-image mt-1 mb-3"><img class="rounded-circle" src="img/Raviandra.png" width="75"></div>
                         <div class="d-flex flex-column ml-3">
                             <div class="d-flex flex-row">
                                 <h6 style="color: #EFA30A;" class="mt-1">Raviandra</h6>
                             </div>
                             <div class="d-flex flex-row">
                               <div class="card-text">Kelompok kami masih ada slot untuk satu orang.</div>
                           </div>
                             <div class="d-flex flex-row align-items-center align-content-center small mt-1 mb-3">23 April 2021, 11.00</div>
                         </div>
                       </div>
                   </div>
                 </div>
             </div>
           </div>
         </div>
       <div class="col-md-3">
         <div class="card mt-4 ml-3">
           <div class="card-body">
             <h5 class="card-title m-2">To-Do List</h5>
             <div class="list-group mt-4 m-1">
               <a href="#" class="list-group-item list-group-item-action">
                 <p class="mb-1">Tugas Kelompok 1</p>
                 <small>30 April 2021, 23.59</small>
               </a>
               <a href="#" class="list-group-item list-group-item-action">
                 <p class="mb-1">Tugas Individu 1</p>
                 <small>1 Mei 2021, 23.59</small>
               </a>
             </div>
           </div>
           </div>
       </div>
     </div>
     </div>
 
     <!-- Optional JavaScript-->
 
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
 </html>


 <?php
 echo $OUTPUT->footer();
 ?>