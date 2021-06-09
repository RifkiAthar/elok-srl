<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/index.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('SRL Class');


$user = $USER->username;


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
 
     <title>Course: Algoritme dan Struktur Data</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="card mt-3 w-100" style="border-width: 0px !important;">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-arrow p-0">
               <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
               <li aria-current="page" class="breadcrumb-item active">Mata Kuliah</li>
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
             <a class="nav-link active" href="#">Materi Kuliah</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="evaluasinonmandiri.php">Evaluasi Non Mandiri</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="forumdiskusi.php">Forum Diskusi</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="hasilbelajar.php">Hasil Belajar</a>
           </li>
         </ul>
       <div class="container px-5">
             <table class="table table-striped mt-5">
               <thead class="table-dark">
                 <tr>
                   <th scope="col"></th>
                   <th scope="col">Learning Outcomes</th>
                 </tr>
               </thead>
               <tbody>
                   <tr>
                     <td scope="row">LO1</td>
                     <td>Students can explain the initial overview of algorithms and data structures.</td>
                   </tr>
                   <tr>
                     <td scope="row">LO2</td>
                     <td>Students can explain and implement algorithm understanding, algorithm requirements, and different iterations and recursion.</td>
                   </tr>
                   <tr>
                     <td scope="row">LO3</td>
                     <td>Students can explain and implement data representation, make data declarations on various data types, variables and Abstract Data Type (ADT).</td>
                   </tr>
                   <tr>
                     <td scope="row">LO4</td>
                     <td>Students can explain and implement operation of the data structure of the stack, queue, list, and data tree.</td>
                   </tr>
                   <tr>
                     <td scope="row">LO5</td>
                     <td>Students can explain and implement various data sorting and searching algorithm.</td>
                   </tr>
                   <tr>
                     <td scope="row">LO6</td>
                     <td>Students can explain and implement graph data structure.</td>
                   </tr>
               </tbody>
             </table>
         <h5 class="card-title mt-3">Materi Kuliah</h5>
           <div class="row">
             <div class="col-md-4">
               <div class="card text-center mt-4 mb-5">
                 <img src="img/ic_tree.svg" class="card-img-top mt-3" alt="Tree" width="150px" height="150px">
                 <div class="card-body">
                   <h5 class="card-text-nt">Tree</h5>
                   <p class="card-text">Struktur data yang terdiri dari akar dan subpohon-subpohon dalam susunan hierarki.</p>
                   <a href="rekomendasi.php" class="btn btn-primary btn-block" style="font-weight: bold;">PILIH</a> 
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="card text-center mt-4">
                 <img src="img/ic_sorting.svg" class="card-img-top mt-3" alt="Sorting" width="150px" height="150px">
                 <div class="card-body">
                   <h5 class="card-text-nt">Sorting</h5>
                   <p class="card-text">Metode yang digunakan untuk mengatur sekumpulan objek menurut susunan tertentu.</p>
                   <a href="#" class="btn btn-primary btn-block" style="font-weight: bold;">PILIH</a> 
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="card text-center mt-4">
                 <img src="img/ic_materi search.svg" class="card-img-top mt-3" alt="Search" width="150px" height="150px">
                 <div class="card-body">
                   <h5 class="card-text-nt">Search</h5>
                   <p class="card-text">Metode yang digunakan untuk melakukan proses pencarian dari sekumpulan objek.</p>
                   <a href="#" class="btn btn-primary disabled btn-block" tabindex="-1" style="font-weight: bold;" aria-disabled="true">PILIH</a> 
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
