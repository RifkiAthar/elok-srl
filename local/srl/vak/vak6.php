<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/quizmaster/index.php'));
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
 
     <title>Kuesioner Gaya Belajar VAK</title>
   </head>
   <body>
     <div class="container">
     <div class="row">
        <div class="card mt-3 w-100" style="border-width: 0px !important;">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-arrow p-0">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li aria-current="page" class="breadcrumb-item active">Tes Gaya Belajar</li>
            </ol>
          </nav>
        </div>
      </div>
     <div class="row">
         <div class="card w-100 mt-3">
           <div class="card-body">
           <h5 class="card-title text-center mt-4 mb-5">Tes Gaya Belajar</h5>
           <div class="container-fluid px-5">
             <table class="table table-borderless table-sm">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">26.</th>
                   <th scope="col" style="width: 96%;">Saya pikir bahwa saya dapat mengetahui apakah seseorang berbohong jika:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault1" value="1">
                     <label class="form-check-label" for="flexRadioDefault1">A. mereka menghindari melihat Anda.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault2" value="2">
                     <label class="form-check-label" for="flexRadioDefault2">B. perubahan suara mereka..</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault3" value="3">
                     <label class="form-check-label" for="flexRadioDefault3">C. mereka menunjukkan hal aneh.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">27.</th>
                   <th scope="col" style="width: 96%;">Ketika saya bertemu dengan seorang teman lama:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault4" value="1">
                     <label class="form-check-label" for="flexRadioDefault4">A. Saya berkata "Senang bertemu denganmu!"</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault5" value="2">
                     <label class="form-check-label" for="flexRadioDefault5">B. Saya berkata "Senang mendengar kabar tentangmu!"
                     </label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault6" value="3">
                     <label class="form-check-label" for="flexRadioDefault6">C. Saya memberi mereka pelukan atau jabat tangan.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%">28.</th>
                   <th scope="col" style="width: 96%;">Saya mengingat hal-hal yang terbaik dengan cara:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault7" value="1">
                     <label class="form-check-label" for="flexRadioDefault7">A. menulis catatan atau menyimpan rincian materi print-out.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault8" value="2">
                     <label class="form-check-label" for="flexRadioDefault8">B. mengatakan dengan suara keras atau mengulang-ulang kata-kata penting dan menghafal kata-kata kunci.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault9" value="3">
                     <label class="form-check-label" for="flexRadioDefault9">C. melakukan dan mempraktikkan kegiatan atau membayangkan bagaimana suatu hal dilakukan.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">29.</th>
                   <th scope="col" style="width: 96%;">Jika saya mengeluh tentang barang rusak yang sudah dibeli, saya paling nyaman:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault10" value="1">
                     <label class="form-check-label" for="flexRadioDefault10">A. menulis surat.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault11" value="2">
                     <label class="form-check-label" for="flexRadioDefault11">B. mengontak melalui telepon.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault12" value="3">
                     <label class="form-check-label" for="flexRadioDefault12">C. mengembalikan ke toko atau menyampaikannya ke kepala kantor.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">30.</th>
                   <th scope="col" style="width: 96%;">Saya cenderung mengatakan:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault13" value="1">
                     <label class="form-check-label" for="flexRadioDefault13">A. Saya paham apa yang Anda maksud.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault14" value="2">
                     <label class="form-check-label" for="flexRadioDefault14">B. Saya mendengar apa yang Anda katakan.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault15" value="3">
                     <label class="form-check-label" for="flexRadioDefault15">C. Saya tahu bagaimana Anda merasakannya.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <div class="d-inline-flex w-100 mb-3 mt-4">
             <div scope="col" style="width: 63%;">
             <nav aria-label="Page navigation">
               <ul class="pagination justify-content-end">
                  <li class="page-item"><a class="page-link" href="vak1.php">1</a></li>
                  <li class="page-item"><a class="page-link" href="vak2.php">2</a></li>
                  <li class="page-item"><a class="page-link" href="vak3.php">3</a></li>
                  <li class="page-item"><a class="page-link" href="vak4.php">4</a></li>
                  <li class="page-item"><a class="page-link" href="vak5.php">5</a></li>
                  <li class="page-item"><a class="page-link active" href="#">6</a></li>
               </ul>
             </nav>
             </div>
             <div scope="col" style="width: 37%;">
             <button type="submit" class="btn btn-primary float-right mt-1" style="font-weight: bold;">SELESAI</button>
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