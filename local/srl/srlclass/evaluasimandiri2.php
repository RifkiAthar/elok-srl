<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/evaluasimandiri.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Evaluasi Mandiri');

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
 
     <title>Evaluasi Mandiri: Tree</title>
   </head>
   <body>
     <div class="container">
     <div class="row">
        <div class="card mt-3 w-100" style="border-width: 0px !important;">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-arrow p-0">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item pl-0"><a href="#">Mata Kuliah</a></li>
              <li class="breadcrumb-item pl-0"><a href="#">Strategi Belajar</a></li>
              <li class="breadcrumb-item pl-0"><a href="#">Mind Mapping</a></li>
              <li aria-current="page" class="breadcrumb-item active">Evaluasi Mandiri</li>
            </ol>
          </nav>
        </div>
      </div>
     <div class="row">
         <div class="card w-100 mt-4">
           <div class="card-body">
           <h5 class="card-text-nt text-center mt-4 mb-5">Evaluasi Mandiri: Tree</h5>
           <div class="container-fluid px-5">
             <table class="table table-borderless table-sm">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                  <th scope="col" style="width: 4%">
                    <div class="card-text mb-1">6.</div>
                    <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                    <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                  </th>
                  <th scope="col" style="width: 96%;">
                    <div class="card-text mb-1">Berikut ini merupakan kasus yang sering terjadi saat penyisipan pada AVL tree:</div> 
                    <ul class="list-inline mb-1">
                      <li class="list-inline-item" style="width: 48%;">(i) Node terdalam terletak pada subtree kiri dari anak kiri node yang harus diseimbangkan (left-left).</li>
                      <li class="list-inline-item" style="width: 48%;">(iii) Node terdalam terletak pada subtree kanan dari anak kiri node yang harus diseimbangkan (right-left).</li>
                    </ul>
                    <ul class="list-inline mb-1">
                      <li class="list-inline-item" style="width: 48%;">(ii) Node terdalam terletak pada subtree kanan dan kanan kiri node yang harus diseimbangkan (right-right).</li>
                      <li class="list-inline-item" style="width: 48%;">(iv) Node terdalam terletak pada subtree kiri dari anak kanan node yang harus diseimbangkan (left-right).</li>
                    </ul>               
                  </th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no6" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">A. (i) dan (ii)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no6" id="flexRadioDefault2">
                     <label class="form-check-label" for="flexRadioDefault2">B. (i) dan (iv)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no6" id="flexRadioDefault3">
                     <label class="form-check-label" for="flexRadioDefault3">C. (ii) dan (iii)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no6" id="flexRadioDefault4">
                     <label class="form-check-label" for="flexRadioDefault4">D. (iii) dan (iv)</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">7.</th>
                   <th scope="col" style="width: 96%;">Berikut ini merupakan pernyataan yang benar terkait B-tree, kecuali…</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no7" id="flexRadioDefault5">
                     <label class="form-check-label" for="flexRadioDefault5">A. Dapat menyeimbangkan diri sendiri.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no7" id="flexRadioDefault6">
                     <label class="form-check-label" for="flexRadioDefault6">B. Menambah jumlah akses disk.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no7" id="flexRadioDefault7">
                     <label class="form-check-label" for="flexRadioDefault7">C. Sering digunakan dalam database dan sistem file.</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no7" id="flexRadioDefault8">
                     <label class="form-check-label" for="flexRadioDefault8">D. Dioptimalkan untuk pembacaan dan penulisan block data yang besar.</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                  <tr>
                    <th scope="col" style="width: 4%;">8.</th>
                    <th scope="col" style="width: 96%;">Contoh implementasi antrian berprioritas diantaranya…</th>
                  </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no8" id="flexRadioDefault9">
                     <label class="form-check-label" for="flexRadioDefault9">A. Red black tree</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no8" id="flexRadioDefault10">
                     <label class="form-check-label" for="flexRadioDefault10">B. AVL tree</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no8" id="flexRadioDefault11">
                     <label class="form-check-label" for="flexRadioDefault11">C. B-tree</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no8" id="flexRadioDefault12">
                     <label class="form-check-label" for="flexRadioDefault12">D. Leftist tree</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
           </table>
           <table class="table table-borderless table-sm mt-4">
             <thead class="table-light" style="background-color: whitesmoke;">
               <tr>
                 <th scope="col" style="width: 4%">
                   <div class="card-text mb-1">9.</div>
                   <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                   <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                 </th>
                 <th scope="col" style="width: 96%;">
                   <div class="card-text mb-1">Berikut ini merupakan ciri-ciri dari max heap tree:</div> 
                   <ul class="list-inline mb-1">
                     <li class="list-inline-item" style="width: 48%;">(i) Pohon yang nilai setiap node-nya lebih besar atau sama dengan nilai child (jika punya).</li>
                     <li class="list-inline-item" style="width: 48%;">(iii) Merupakan sebuah complete binary tree.</li>
                   </ul>
                   <ul class="list-inline mb-1">
                     <li class="list-inline-item" style="width: 48%;">(ii) Root note memiliki nilai terbesar. </li>
                     <li class="list-inline-item" style="width: 48%;">(iv) Struktur data linked yang disesuaikan untuk penggunaan antrian berprioritas.</li>
                   </ul>               
                 </th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="no9" id="flexRadioDefault13">
                   <label class="form-check-label" for="flexRadioDefault13">A. (i) dan (ii)</label>
                 </div></td>
               </tr>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="no9" id="flexRadioDefault14">
                   <label class="form-check-label" for="flexRadioDefault14">B. (i), (ii), dan (iii)</label>
                 </div></td>
               </tr>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="no9" id="flexRadioDefault15">
                   <label class="form-check-label" for="flexRadioDefault15">C. (i), (ii) dan (iv)</label>
                 </div></td>
               </tr>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="no9" id="flexRadioDefault16">
                   <label class="form-check-label" for="flexRadioDefault16">D. (i), (ii), (iii), dan (iv)</label>
                 </div></td>
               </tr>
             </tbody>
           </table>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">10.</th>
                   <th scope="col" style="width: 96%;">Pada pengurutan heap, elemen dapat diekstrak dengan urutan prioritas naik. Hal ini disebut dengan…</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no10" id="flexRadioDefault17">
                     <label class="form-check-label" for="flexRadioDefault17">A. Min priority queue</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no10" id="flexRadioDefault18">
                     <label class="form-check-label" for="flexRadioDefault18">B. Max priority queue</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no10" id="flexRadioDefault19">
                     <label class="form-check-label" for="flexRadioDefault19">C. Min heap queue</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="no10" id="flexRadioDefault20">
                     <label class="form-check-label" for="flexRadioDefault20">D. Max heap queue</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <div class="d-inline-flex w-100 mb-3 mt-4">
             <div scope="col" style="width: 54%;">
             <nav aria-label="Page navigation">
               <ul class="pagination justify-content-end">
                 <li class="page-item"><a class="page-link" href="evaluasimandiri.php">1</a></li>
                 <li class="page-item"><a class="page-link active" href="#">2</a></li>
               </ul>
             </nav>
             </div>
             <div scope="col" style="width: 46%;">
            <button type="submit" class="btn btn-primary float-right mt-1" data-toggle="modal" data-target="#ModalReview" style="font-weight: bold;">SELESAI</button>
            <div class="modal fade" id="ModalReview" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="ModalReviewLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document" style="width: 250px;">
              <div class="modal-content">
                  <div class="modal-body text-center">
                    <img src="img/ic_virtual tutor.png"class="flex-shrink-0 mr-2" width="200px" height="200px">
                    <div class="d-inline-block" style="color: #EFA30A;"><i class="fas fa-star"></i></div>
                    <h6 class="d-inline-block modal-title mt-2" id="ModalReviewLabel" style="color: #EFA30A;"">90</h6>
                    <div class="small mt-2">Selamat, kamu telah menyelesaikan evaluasi mandiri dengan baik. Kamu dapat memeriksa kembali jawabanmu pada review.</div>
                    <div class="d-grid mt-3">
                      <a href="hasilbelajar.php" class="btn btn-secondary mr-1" style="font-weight: bold;width: 100px;">LEWATI</a>
                      <a href="#" class="btn btn-primary" style="font-weight: bold;width: 100px;">REVIEW</a> 
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
     </div>
 
     <!-- Optional JavaScript-->
 
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
 </html>

 <?php

 echo $OUTPUT->footer();
 ?>