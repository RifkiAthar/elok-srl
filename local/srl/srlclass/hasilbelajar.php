<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/hasilbelajar.php'));
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
 
     <title>Hasil Belajar: Algoritme dan Struktur Data</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="card mt-3 w-100" style="border-width: 0px !important;">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-arrow p-0">
               <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
               <li class="breadcrumb-item pl-0"><a href="#">Mata Kuliah</a></li>
               <li aria-current="page" class="breadcrumb-item active">Hasil Belajar</li>
             </ol>
           </nav>
         </div>
       </div>
       <div class="row">
         <div class="card-course w-100 mt-4">
             <div class="row no-gutters">
             <div class="col-md-2>">
                 <img src="img/ASD.png" class="card-img-center mt-4 ml-4" alt="Algoritme dan Struktur Data" width="100px" height="100px">
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
             <a class="nav-link" href="forumdiskusi.php">Forum Diskusi</a>
           </li>
           <li class="nav-item">
             <a class="nav-link active" href="#">Hasil Belajar</a>
           </li>
         </ul>
       <div class="container px-5">
           <div class="card w-100 mt-5">
             <div class="card-body">
             <h5 class="card-text-nt">Status Belajar</h5>
             <div class="d-inline-flex w-100 mb-3 mt-3">
               <div scope="col" style="width: 18%;">
                 <p class="card-text">Progres Belajar</p>
               </div>
               <div scope="col" style="width: 82%;">
                 <div class="progress" style="height:22px;">
                   <div class="progress-bar" style="width:30%;height:22px;background-color:#3CADC9;font-weight: bold;">30</div>
                 </div>
               </div>
             </div>
             <div class="d-inline-flex w-100 mb-3 mt-2">
               <div scope="col" style="width: 18%;">
                 <p class="card-text">Nilai Kumulatif</p>
               </div>
               <div scope="col" style="width: 82%;">
                 <div class="progress" style="height:22px;">
                   <div class="progress-bar" style="width:90%;height: 22px;background-color:#3CADC9;font-weight: bold;">90</div>
                 </div>
               </div>
             </div>
             </div>
           </div>
           <div class="card w-100 mt-5 mb-5">
             <div class="card-body">
             <h5 class="card-text-nt">Capaian Pembelajaran</h5>
             <ul class="list-group mt-4">
               <li class="list-group-item" id="list-group-item-nh">
                 <span class="d-inline-block" style="font-weight: bold;width: 60%;">Evaluasi Mandiri: Stack</span>
                 <span class="d-inline-block" style="width: 3%;"><i class="far fa-clock"></i></span>
                 <span class="d-inline-block" style="width: 28%;">25 Mei 2021</span>
                 <span class="d-inline-block" style="width: 3%;color: #EFA30A;"><i class="fas fa-star"></i></span>
                 <span class="d-inline-block" style="color: #EFA30A;font-weight: bold;">90</span>
               </li>
               <li class="list-group-item" id="list-group-item-nh">
                 <span class="d-inline-block" style="font-weight: bold;width: 60%;">Evaluasi Mandiri: Tree</span>
                 <span class="d-inline-block" style="width: 3%;"><i class="far fa-clock"></i></span>
                 <span class="d-inline-block" style="width: 28%;">23 Mei 2021</span>
                 <span class="d-inline-block" style="width: 3%;color: #EFA30A;"><i class="fas fa-star"></i></span>
                 <span class="d-inline-block" style="color: #EFA30A;font-weight: bold;">90</span>
               </li>
             </ul>
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