<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/evaluasinonmandiri.php'));
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
 
     <title>Evaluasi Non Mandiri: Algoritme dan Struktur Data</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="card mt-3 w-100" style="border-width: 0px !important;">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-arrow p-0">
               <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
               <li class="breadcrumb-item pl-0"><a href="#">Mata Kuliah</a></li>
               <li aria-current="page" class="breadcrumb-item active">Evaluasi Non Mandiri</li>
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
             <a class="nav-link active" href="#">Evaluasi Non Mandiri</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="forumdiskusi.php">Forum Diskusi</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="hasilbelajar.php">Hasil Belajar</a>
           </li>
         </ul>
       <div class="container px-5">
           <div class="card w-100 mt-5 mb-5">
               <div class="row">
                 <div class="col-md-12">
                   <div class="card-body">
                     <h5 class="card-text-nt m-1 mb-3">Tugas Kelompok 1</h5>
                     <p class="card-text m-1">Buatlah program Stack dengan bahasa C. Format berisi source code dan screenshot program.</p>
                     <p class="card-text m-1 mt-3" style="font-weight: bold;">Due date: 30 April 2021, 23:59</p>
                     <p class="card-text m-1" style="font-weight: bold;">Last modified: -</p>
                     <div class="m-1 mt-3">  
                       <input class="form-control" type="file" id="formFile">
                     </div>
                       <button type="submit" class="btn btn-primary float-right m-1 mt-3 mb-3" disabled style="font-weight: bold;">KIRIM</button>
                   </div>
                 </div>
               </div>
               </div>
               <div class="card w-100 mb-5">
                 <div class="row">
                   <div class="col-md-12">
                     <div class="card-body">
                       <h5 class="card-text-nt m-1 mb-3">Tugas Individu 1</h5>
                       <p class="card-text m-1">Buatlah 1 contoh operasi pencarian pada Red-Black Tree.</p>
                       <p class="card-text m-1 mt-3" style="font-weight: bold;">Due date: 1 Mei 2021, 23:59</p>
                       <p class="card-text m-1" style="font-weight: bold;">Last modified: -</p>
                       <div class="m-1 mt-3">  
                         <input class="form-control" type="file" id="formFile">
                       </div>
                         <button type="submit" class="btn btn-primary float-right m-1 mt-3 mb-3" disabled style="font-weight: bold;">KIRIM</button>
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