<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/panduan.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Panduan');

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
 
     <title>Panduan Belajar dengan eLOK</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="card mt-3 w-100" style="border-width: 0px !important;">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb breadcrumb-arrow p-0">
               <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
               <li aria-current="page" class="breadcrumb-item active">Panduan Belajar</li>
             </ol>
           </nav>
         </div>
       </div>
       <div class="row">
         <div class="card mt-3 mb-3">
           <div class="card-body">
             <h5 class="card-title">Panduan Belajar dengan eLOK</h5>
             <div class="row no-gutters">
               <div class="col-md-7">
                 <table class="table table-borderless table-sm mt-3">
                   <thead class="table-light" style="background-color: white;">
                     <tr>
                       <th scope="col" style="width: 5%;"><i class="fas fa-check-circle fa-lg" style="color: #3CADC9;"></i></th>
                       <th scope="col" style="width: 95%;"><h6 class="card-text-nt mb-1">Gaya Belajar</h6></th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <th scope="row"></th>
                       <td><p class="mb-1">Tes gaya belajar VAK (Visual, Auditori, Kinestetik) bertujuan untuk mengetahui gaya belajar yang dominan. Hasil tes gaya belajar dijadikan dasar untuk menampilkan rekomendasi strategi belajar. Tes gaya belajar dapat diakses pada halaman Dashboard.</p>                                 
                       </td>
                     </tr>
                     <tr>
                       <th scope="row"><i class="fas fa-check-circle fa-lg" style="color: #3CADC9;"></i></th>
                       <td><h6 class="card-text-nt mb-1">Pilih Materi dan Strategi Belajar</h6>                                 
                       </td>
                     </tr>
                     <tr>
                       <th scope="row"></th>
                       <td><p class="mb-1">Tersedia tiga pilihan strategi belajar yaitu Summarization, Control Video, dan Mind Mapping. Mahasiswa diberi kebebasan untuk menentukan materi dan strategi belajar yang ingin digunakan.</p>                                                                  
                       </td>
                     </tr>
                     <tr>
                       <th scope="row"><i class="fas fa-check-circle fa-lg" style="color: #3CADC9;"></i></th>
                       <td><h6 class="card-text-nt mb-1">Evaluasi Mandiri dan Non Mandiri</h6>                                 
                       </td>
                     </tr>
                     <tr>
                       <th scope="row"></th>
                       <td><p class="mb-1">Setelah menyelesaikan satu materi, terdapat evaluasi mandiri berupa quiz singkat untuk mengukur pemahaman. Dosen dapat memberikan evaluasi non mandiri berupa quiz atau tugas yang dapat diakses pada halaman mata kuliah bagian evaluasi.</p>                                 
                       </td>
                     </tr>
                     <tr>
                       <th scope="row"><i class="fas fa-check-circle fa-lg" style="color: #3CADC9;"></i></th>
                       <td><h6 class="card-text-nt">Hasil Belajar</h6>                                 
                       </td>
                     </tr>
                     <tr>
                       <th scope="row"></th>
                       <td><p class="mb-1">Proses belajar dapat dipantau pada halaman Hasil Belajar. Terdapat riwayat capaian pembelajaran, waktu belajar, dan status belajar yang menunjukkan progres belajar dari keseluruhan materi dan nilai kumulatif.</p>                                 
                       </td>
                     </tr>
                   </tbody>
                 </table>
                 </div>
               <div class="col-md-5">
                 <div class="card-body">
                   <img src="img/ic_virtual tutor long.png" class="card-img-center mt-4" alt="Virtual Tutor" width="430px" height="430px">
                 </div>
               </div>
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