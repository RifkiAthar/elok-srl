<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/controlvideo.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Control Video');

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Control Video: Tree</title>
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
              <li aria-current="page" class="breadcrumb-item active">Control Video</li>
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
                <iframe width="720" height="455" src="https://www.youtube.com/embed/i4CglDZfCJU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-body" style="border: none;">
                  <h5 class="card-title">Rekam Rangkuman</h5>
                  <div id="controls" class="mb-2 text-center">
                    <button class="btn btn-primary ml-2 mr-1" style="width: 100px;" id="recordButton"><i class="fas fa-microphone fa-sm"></i> Record</button>
                    <button class="btn btn-primary" style="width: 100px;" id="pauseButton" disabled><i class="fas fa-pause-circle"></i> Pause</button>
                    <button class="btn btn-primary ml-1 mr-2" style="width: 100px;" id="stopButton" disabled><i class="fas fa-stop-circle"></i> Stop</button>
                   </div>
                   <div id="formats"></div>
                   <p class="mt-2" style="font-weight: bold;">Rekaman:</p>
                   <ol id="recordingsList"></ol>
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
    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
    <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
    <script src="simple-recorderjs/js/app.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
  </body>
</html>

<?php
 echo $OUTPUT->footer();
 ?>