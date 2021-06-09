<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/summarization.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Summarization');

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Summarization: Tree</title>
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
              <li aria-current="page" class="breadcrumb-item active">Summarization</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="card mt-4">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Algoritme dan Struktur Data: Tree</h5>
                <iframe src="img/Summarization - Struktur Data Pohon.pdf#toolbar=1" width="720px" height="455px">
                </iframe>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-body">
                  <h5 class="card-title">Tulis Rangkuman</h5>
                  <div id="summernote"></div>
                  <button class="btn btn-primary btn-sm float-right mt-2 ml-1"><i class="far fa-save fa-lg"></i></button>
                  <button class="btn btn-primary btn-sm float-right mt-2"><i class="fa fa-download"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <button type="button" class="btn btn-primary mb-2"  data-toggle="modal" data-target="#ModalEvalMandiri"  style="font-weight: bold;width: 100px;">SELESAI</button>
              <div class="modal fade" id="ModalEvalMandiri" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="ModalEvalMandiriLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" style="width: 250px;">
                <div class="modal-content">
                    <div class="modal-body text-center">
                      <img src="img/ic_virtual tutor.png"class="flex-shrink-0 mr-2" width="200px" height="200px">
                      <h6 class="modal-title mt-2" id="ModalEvalMandiriLabel" style="color: #EFA30A;">Evaluasi Mandiri</h6>
                      <div class="small mt-2">Untuk mengukur pemahamanmu, ikuti evaluasi mandiri berikut ini, yuk! Evaluasi mandiri berjumlah 10 soal dengan 4 pilihan jawaban.</div>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>$('#summernote').summernote({ 
      placeholder: 'Tulis rangkuman',
      tabsize: 1,
      height: 327,
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture',]],
          ['view', ['fullscreen']]
        ],
    });
    </script>
  </body>
</html>

<?php
 echo $OUTPUT->footer();
 ?>