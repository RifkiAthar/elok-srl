<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/dashboard.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Dashboard');

 echo $OUTPUT->header();

?>

<!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <title>Dashboard</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
 
   </head>
   <body>
     <div class="container">
       <div class="row mt-4">
         <div class="col-md-8">
         <div class="card">
           <div class="card-body">
           <h5 class="card-title">Selamat Datang di eLOK</h5>
           <div class="d-flex position-relative">
             <img src="img/ic_virtual tutor.png" class="flex-shrink-0 me-3 mt-1" alt="Virtual Tutor" width="230px" height="230px">
             <div class="mt-4 ml-4">  
               <h6 class="card-text-nt">Tes Gaya Belajar</h6>
               <p class="card-text">Tes gaya belajar bertujuan untuk mengetahui area yang dominan dalam belajar, yaitu visual, audio, dan kinestetik.</p>
               <p class="card-text">Hasil tes gaya belajar akan digunakan untuk memberi rekomendasi strategi belajar.</p>
               <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#ModalDashboard" style="font-weight: bold;width: 100px;">MULAI</button>
               <div class="modal fade" id="ModalDashboard" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="ModalDashboardLabel" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered" role="document" style="width: 250px;">
                 <div class="modal-content">
                     <div class="modal-body text-center">
                       <img src="img/ic_virtual tutor.png"class="flex-shrink-0 mr-2" width="200px" height="200px">
                       <h6 class="modal-title mt-2" id="ModalDashboardLabel" style="color: #EFA30A;">Tes Gaya Belajar</h6>
                       <div class="small mt-2">Tes gaya belajar berjumlah 30 soal dengan 3 pilihan jawaban. Pilih jawaban yang paling mewakili bagaimana biasanya kamu bersikap.</div>
                       <div class="d-grid mt-3">
                         <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal" aria-label="Close" style="font-weight: bold;width: 100px;">BATAL</button>
                         <a href="#" class="btn btn-primary" style="font-weight: bold;width: 100px;">MULAI</a> 
                       </div>
                     </div>
                 </div>
                 </div>
               </div>
             </div>
           </div>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="card">
           <div class="card-body">
           <h5 class="card-title">Mata Kuliah Aktif</h5>
             <div class="container px-4 mt-4 mb-3">
             <div class="card" style="border-width: 0px;">   
             <img src="img/ASD3.png" class="card-img-top" alt="Algoritme dan Struktur Data">
             <div class="card-body text-center">
               <h6 class="card-text-nt">Algoritme dan Struktur Data</h6>
               <p class="small m-1">Dr. Indriana Hidayah, S.T., M.T.</p>
               <p class="small m-1">Semester Ganjil 2020/2021</p>
               <p class="small m-1">TIF 141</p>
               <a href="#" class="stretched-link"></a>
             </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   </div>
 
     <!-- Optional JavaScript; choose one of the two! -->
     <script>
       $(document).ready(function(){
           $(".show-toast").click(function(){
               $("#myToast").toast({
                   autohide: false
               });
           }); 
       });
       </script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
 </html>

 <?php

 echo $OUTPUT->footer();
 ?>