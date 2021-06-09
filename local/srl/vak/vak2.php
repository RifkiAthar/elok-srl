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
                   <th scope="col" style="width: 4%;">6.</th>
                   <th scope="col" style="width: 96%;">Selama waktu senggang, saya paling menikmati saat:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault1" value="1">
                     <label class="form-check-label" for="flexRadioDefault1">A. pergi ke museum dan galeri.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault2" value="2">
                     <label class="form-check-label" for="flexRadioDefault2">B. mendengarkan musik dan bincang-bincang dengan teman-teman saya.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault3" value="3">
                     <label class="form-check-label" for="flexRadioDefault3">C. bermain olahraga atau melakukan hal yang bisa saya lakukan.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">7.</th>
                   <th scope="col" style="width: 96%;">Ketika saya pergi berbelanja pakaian, saya cenderung untuk:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault4" value="1">
                     <label class="form-check-label" for="flexRadioDefault4">A. membayangkan apakah pakaian tersebut sesuai bagi saya.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault5" value="2">
                     <label class="form-check-label" for="flexRadioDefault5">B. mendiskusikannya dengan karyawan toko.
                     </label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault6" value="3">
                     <label class="form-check-label" for="flexRadioDefault6">C. mencoba pakaian dan melihat kesesuaiannya.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%">8.</th>
                   <th scope="col" style="width: 96%;">Bila saya memilih liburan, saya biasanya:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault7" value="1">
                     <label class="form-check-label" for="flexRadioDefault7">A. membaca banyak brosur.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault8" value="2">
                     <label class="form-check-label" for="flexRadioDefault8">B. meminta rekomendasi dari teman-teman.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault9" value="3">
                     <label class="form-check-label" for="flexRadioDefault9">C. membayangkan akan seperti apa jika berada di sana</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">9.</th>
                   <th scope="col" style="width: 96%;">Jika saya membeli mobil baru, saya akan:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault10" value="1">
                     <label class="form-check-label" for="flexRadioDefault10">A. membaca ulasan di koran dan majalah.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault11" value="2">
                     <label class="form-check-label" for="flexRadioDefault11">B. membahas apa yang saya butuhkan dengan teman-teman.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault12" value="3">
                     <label class="form-check-label" for="flexRadioDefault12">C. melakukan test-drive banyak jenis.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">10.</th>
                   <th scope="col" style="width: 96%;">Ketika saya sedang belajar keterampilan baru, saya paling nyaman:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault13" value="1">
                     <label class="form-check-label" for="flexRadioDefault13">A. melihat apa yang pengajar lakukan.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault14" value="2">
                     <label class="form-check-label" for="flexRadioDefault14">B. menanyakan ke pengajar tentang apa yang seharusnya saya lakukan.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault15" value="3">
                     <label class="form-check-label" for="flexRadioDefault15">C. mencobanya dan menemukan sendiri ketika saya mempelajarinya.
                     </label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <div class="d-inline-flex w-100 mb-3 mt-4">
             <div scope="col" style="width: 63%;">
             <nav aria-label="Page navigation">
               <ul class="pagination justify-content-end">
                  <li class="page-item"><a class="page-link" href="vak1.php">1</a></li>
                  <li class="page-item"><a class="page-link active" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="vak3.php">3</a></li>
                  <li class="page-item"><a class="page-link" href="vak4.php">4</a></li>
                  <li class="page-item"><a class="page-link" href="vak5.php">5</a></li>
                  <li class="page-item"><a class="page-link" href="vak6.php">6</a></li>
               </ul>
             </nav>
             </div>
             <div scope="col" style="width: 37%;">
             <button type="submit" class="btn btn-primary float-right mt-1" disabled style="font-weight: bold;">SELESAI</button>
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