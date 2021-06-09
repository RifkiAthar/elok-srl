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
                   <th scope="col" style="width: 4%;">16.</th>
                   <th scope="col" style="width: 96%;">Ketika saya cemas, saya:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault1" value="1">
                     <label class="form-check-label" for="flexRadioDefault1">A. membayangkan skenario terburuk.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault2" value="2">
                     <label class="form-check-label" for="flexRadioDefault2">B. memikirkan apa yang paling mengkhawatirkan saya.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no1" id="flexRadioDefault3" value="3">
                     <label class="form-check-label" for="flexRadioDefault3">C. tidak dapat duduk tenang, mondar-mandir.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">17.</th>
                   <th scope="col" style="width: 96%;">Saya dapat mengingat orang lain, karena:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault4" value="1">
                     <label class="form-check-label" for="flexRadioDefault4">A. penampilan mereka.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault5" value="2">
                     <label class="form-check-label" for="flexRadioDefault5">B. apa yang mereka katakan kepada saya.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no2" id="flexRadioDefault6" value="3">
                     <label class="form-check-label" for="flexRadioDefault6">C. bagaimana mereka membuat saya mampu mengingatkan saya tentang mereka.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%">18.</th>
                   <th scope="col" style="width: 96%;">Ketika saya harus merevisi untuk ujian, saya biasanya:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault7" value="1">
                     <label class="form-check-label" for="flexRadioDefault7">A. menulis banyak catatan revisi dan diagram.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault8" value="2">
                     <label class="form-check-label" for="flexRadioDefault8">B. menekuni catatan saya sendiri, atau membahasnya dengan orang lain.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no3" id="flexRadioDefault9" value="3">
                     <label class="form-check-label" for="flexRadioDefault9">C. membayangkan membuat kemajuan belajar atau menciptakan rumus/cara yang tepat.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">19.</th>
                   <th scope="col" style="width: 96%;">Jika saya menjelaskan kepada seseorang, saya cenderung:</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault10" value="1">
                     <label class="form-check-label" for="flexRadioDefault10">A. menunjukkan kepada mereka apa yang saya maksud.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault11" value="2">
                     <label class="form-check-label" for="flexRadioDefault11">B. menjelaskan kepada mereka dengan cara yang memungkinkan sampai mereka paham.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no4" id="flexRadioDefault12" value="3">
                     <label class="form-check-label" for="flexRadioDefault12">C. memotivasi mereka untuk mencoba dan menyampaikan ide saya selagi mereka melakukan kegiatan.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">20.</th>
                   <th scope="col" style="width: 96%;">Saya benar-benar suka:
                   </th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault13" value="1">
                     <label class="form-check-label" for="flexRadioDefault13">A. menonton film, fotografi, melihat seni atau mengamati orang-orang sekitar</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault14" value="2">
                     <label class="form-check-label" for="flexRadioDefault14">B. mendengarkan musik, radio atau bincang-bincang dengan teman-teman.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no5" id="flexRadioDefault15" value="3">
                     <label class="form-check-label" for="flexRadioDefault15">C. berperan serta dalam kegiatan olahraga, atau menikmati makanan yang disajikan.</label>
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
                  <li class="page-item"><a class="page-link active" href="#">4</a></li>
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