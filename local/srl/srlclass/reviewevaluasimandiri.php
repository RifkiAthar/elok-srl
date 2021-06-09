<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/reviewevaluasimandiri.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Review Evaluasi Mandiri');

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
 
     <title>Review Evaluasi Mandiri: Tree</title>
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
               <li class="breadcrumb-item pl-0"><a href="#">Evaluasi Mandiri</a></li>
               <li aria-current="page" class="breadcrumb-item active">Review Evaluasi Mandiri</li>
             </ol>
           </nav>
         </div>
       </div>
     <div class="row">
         <div class="card w-100 mt-4">
           <div class="card-body">
           <h5 class="card-text-nt text-center mt-4 mb-5">Review Evaluasi Mandiri: Tree</h5>
           <div class="container-fluid px-5">
             <table class="table table-borderless table-sm">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">1.</th>
                   <th scope="col" style="width: 96%;">Node yang memiliki child disebut..</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">A. Node Internal</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
                     <label class="form-check-label" for="flexRadioDefault2">B. Node External</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3">
                     <label class="form-check-label" for="flexRadioDefault3">C. Edge</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4">
                     <label class="form-check-label" for="flexRadioDefault4">D. Leaf</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <div class="alert alert-danger" role="alert">
               Jawaban yang tepat: A. Node Internal
             </div>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">2.</th>
                   <th scope="col" style="width: 96%;">Tingkatan dalam sebuah pohon disebut..</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5">
                     <label class="form-check-label" for="flexRadioDefault5">A. Degree</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault6">
                     <label class="form-check-label" for="flexRadioDefault6">B. Hierarki</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault7" checked>
                     <label class="form-check-label" for="flexRadioDefault7">C. Height</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault8">
                     <label class="form-check-label" for="flexRadioDefault8">D. Size</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <div class="alert alert-success" role="alert">
               Jawaban yang tepat: C. Height
             </div>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%">
                     <div class="card-text mb-1">3.</div>
                     <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                     <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                     </th>
                   <th scope="col" style="width: 96%;">
                     <div class="card-text mb-1">Dari daftar berikut, yang merupakan ciri-ciri dari full binary tree adalah..</div> 
                     <ul class="list-inline mb-1">
                       <li class="list-inline-item" style="width: 48%;">(i) Setiap node (kecuali leaf) pasti memiliki 2 child.</li>
                       <li class="list-inline-item" style="width: 48%;">(iii) Setiap subpohon memiliki panjang path yang berbeda.</li>
                     </ul>
                     <ul class="list-inline mb-1">
                       <li class="list-inline-item" style="width: 48%;">(ii) Setiap subpohon memiliki panjang path yang sama.</li>
                       <li class="list-inline-item" style="width: 48%;">(iv) Setiap node (kecuali leaf) hanya memiliki 1 child.</li>
                     </ul>               
                   </th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault9" checked>
                     <label class="form-check-label" for="flexRadioDefault9">A. (i) dan (ii)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault10">
                     <label class="form-check-label" for="flexRadioDefault10">B. (i) dan (iii)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault11">
                     <label class="form-check-label" for="flexRadioDefault11">C. (ii) dan (iv)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault12">
                     <label class="form-check-label" for="flexRadioDefault12">D. (iii) dan (iv)</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
           </table>
           <div class="alert alert-success" role="alert">
             Jawaban yang tepat: A. (i) dan (ii)
           </div>
           <table class="table table-borderless table-sm mt-4">
             <thead class="table-light" style="background-color: whitesmoke;">
               <tr>
                 <th scope="col" style="width: 4%">
                   <div class="card-text mb-1">4.</div>
                   <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                   <div class="card-text mb-1" style="color: whitesmoke;">-</div>
                 </th>
                 <th scope="col" style="width: 96%;">
                   <div class="card-text mb-1">Dari daftar berikut, yang merupakan fungsi dari preorder traversal adalah..</div> 
                   <ul class="list-inline mb-1">
                     <li class="list-inline-item" style="width: 48%;">(i) Memproyeksikan ke bentuk satu dimensi kembali.</li>
                     <li class="list-inline-item" style="width: 48%;">(iii) Membuat salinan pohon baru.</li>
                   </ul>
                   <ul class="list-inline mb-1">
                     <li class="list-inline-item" style="width: 48%;">(ii) Menghapus node mulai dari leaf node hingga root node.</li>
                     <li class="list-inline-item" style="width: 48%;">(iv) Mendapat ekspresi prefix.</li>
                   </ul>               
                 </th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault13">
                   <label class="form-check-label" for="flexRadioDefault13">A. (i) dan (ii)</label>
                 </div></td>
               </tr>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault14" checked>
                   <label class="form-check-label" for="flexRadioDefault14">B. (i) dan (iii)</label>
                 </div></td>
               </tr>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault15">
                   <label class="form-check-label" for="flexRadioDefault15">C. (ii) dan (iv)</label>
                 </div></td>
               </tr>
               <tr>
                 <th scope="row"></th>
                 <td><div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault16">
                   <label class="form-check-label" for="flexRadioDefault16">D. (iii) dan (iv)</label>
                 </div></td>
               </tr>
             </tbody>
           </table>
           <div class="alert alert-danger" role="alert">
             Jawaban yang tepat: D. (iii) dan (iv)
           </div>
             <table class="table table-borderless table-sm mt-4">
               <thead class="table-light" style="background-color: whitesmoke;">
                 <tr>
                   <th scope="col" style="width: 4%;">5.</th>
                   <th scope="col" style="width: 96%;">Berikut ini merupakan pernyataan yang benar terkait red black tree, kecuali..</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault17">
                     <label class="form-check-label" for="flexRadioDefault17">A. Akar pohon (root node) selalu hitam</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault18">
                     <label class="form-check-label" for="flexRadioDefault18">B. Tidak ada dua node merah yang berdekatan (sebagai parent atau child)</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault19" checked>
                     <label class="form-check-label" for="flexRadioDefault19">C. Semua leaf node (yang dilambangkan sebagai NULL) berwarna merah</label>
                   </div></td>
                 </tr>
                 <tr>
                   <th scope="row"></th>
                   <td><div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault20">
                     <label class="form-check-label" for="flexRadioDefault20">D.	Setiap jalur dari sebuah node (termasuk root) ke leaf node NULL memiliki jumlah node hitam yang sama</label>
                   </div></td>
                 </tr>
               </tbody>
             </table>
             <div class="alert alert-success" role="alert">
               Jawaban yang tepat: C. Semua leaf node (yang dilambangkan sebagai NULL) berwarna merah
             </div>
             <div class="d-inline-flex w-100 mb-3 mt-4">
             <div scope="col" style="width: 54%;">
             <nav aria-label="Page navigation">
               <ul class="pagination justify-content-end">
                 <li class="page-item"><a class="page-link active" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
               </ul>
             </nav>
             </div>
             <div scope="col" style="width: 46%;">
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