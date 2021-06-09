<?php

 require_once(__DIR__ . '/../../../config.php');
 $PAGE->set_url(new moodle_url('/local/srl/srlclass/mindmapping.php'));
 $PAGE->set_context(\context_system::instance());
 $PAGE->set_title('Mind Mapping');

 echo $OUTPUT->header();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="DrawerJs/lib/jquery-3.4.1.min.js"></script>
    <script src="DrawerJs/lib/jquery-migrate-1.2.1.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="DrawerJs/dist/drawerJs.css"/>
    <script src="DrawerJs/dist/drawerJs.standalone.js"></script>
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Mind Mapping: Tree</title>
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
              <li aria-current="page" class="breadcrumb-item active">Mind Mapping</li>
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
                <iframe src="img/Visual - Struktur Data Pohon.pdf#toolbar=1" width="720" height="455"></iframe>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-body">
                  <h5 class="card-title">Gambar Rangkuman</h5>
                  <div class="container" div id="canvas-editor" style="padding: 0;">
                  </div>
                  <div class="d-flex-inline">
                    <button class="btn btn-primary btn-sm float-right mt-2 ml-1"><i class="far fa-save fa-lg"></i></button>
                    <button class="btn btn-primary btn-sm float-right mt-2"><i class="fa fa-download"></i></button>
                </div>
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
    <script>
      var localization_ru =  {
          'Add Drawer': 'Добавить холст для рисования',
          'Insert Drawer': 'Добавить холст',
          'Insert': 'Добавить',
          'Free drawing mode': 'Карандаш',
          'SimpleWhiteEraser': 'Ластик (белый)',
          'Eraser': 'Ластик',
          'Delete this canvas': 'Удалить полотно',
          'Are you sure want to delete this canvas?': 'Вы уверены что хотите удалить полотно?',
  
  
          // canvas properties popup
          'Size (px)': 'Размер (px)',
          'Position': 'Позиция',
          'Inline': 'На линии',
          'Left': 'Слева',
          'Center': 'По центру',
          'Right': 'Справа',
          'Floating': 'Плавающий',
          'Canvas properties': 'Свойства холста',
          'Background': 'Фон',
          'transparent': 'прозрачный',
          'Cancel': 'Отмена',
          'Save': 'Сохранить',
  
          // Fullscreen plugin
          'Enter fullscreen mode': 'Полноэкранный режим',
          'Exit fullscreen mode': 'Выйти из полноэкранного режима',
  
          // shape context menu plugin
          'Bring forward': 'Переместить выше',
          'Send backwards': 'Переместить ниже',
          'Bring to front': 'Переместить наверх',
          'Send to back': 'Переместить в низ',
          'Duplicate': 'Клонировать',
          'Remove': 'Удалить',
  
          // brush size plugin
          'Size:': 'Размер:',
  
          // color plugin
          'Fill:': 'Заливка:',
          'Transparent': 'Прозрачный',
          'None': 'Нет',
  
          // shape border plugin
          'Border:': 'Граница:',
  
          // arrow plugin
          'Draw an arrow': 'Стрелка',
          'Draw a two-sided arrow': 'Двухсторонняя стрелка',
          'Lines and arrows': 'Линии и стрелки',
  
          // circle plugin
          'Draw a circle': 'Круг',
  
          // line plugin
          'Draw a line': 'Линия',
  
          // rectangle plugin
          'Draw a rectangle': 'Прямоугольник',
  
          // triangle plugin
          'Draw a triangle': 'Треугольник',
  
          // polygon plugin
          'Draw a Polygon': 'Многоугольник',
          'Stop drawing a polygon': 'Закончить рисование многоугольника (esc)',
          'Click to start a new line': 'Кликните для начала новой линии',
  
          // text plugin
          'Draw a text': 'Текст',
          'Click to place a text': 'Нажмите, чтобы расположить текст',
          'Font:': 'Шрифт:',
  
          // movable floating mode plugin
          'Move canvas': 'Подвинуть холст',
  
          // base shape
          'Click to start drawing a ': 'Нажмите, чтобы начать рисовать ',
  
          // image tool
          'Insert an image'          : 'Вставить изображение',
          'No file was selected!'    : 'Не был выбран файл!',
          'Incorrect file type'      : 'Неверный тип файла!',
          'File is to big!. Maximum file size is '   : 'Файл слишком большой! Максимальный размер файла - ',
          'Image failed to create!'  : 'Не удалось создать изображение!',
  
          // background image tool
          'Insert a background image': 'Фоновое изображение'
      };
  
      $(document).ready(function () {
          var drawerPlugins = [
              // Drawing tools
              'Pencil',
              'Eraser',
              'Text',
              'Line',
              'ArrowOneSide',
              'ArrowTwoSide',
              'Triangle',
              'Rectangle',
              'Circle',
              'Image',
              'BackgroundImage',
              'Polygon',
              'ImageCrop',
  
              // Drawing options
              //'ColorHtml5',
              'Color',
              'ShapeBorder',
              'BrushSize',
              'OpacityOption',
  
              'LineWidth',
              'StrokeWidth',
  
              'Resize',
              'ShapeContextMenu',
              'OvercanvasPopup',
              'OpenPopupButton',

              'ToggleVisibilityButton',
              'FullscreenModeButton',
  
              'TextLineHeight',
              'TextAlign',
  
              'TextFontFamily',
              'TextFontSize',
              'TextFontWeight',
              'TextFontStyle',
              'TextDecoration',
              'TextColor',
              'TextBackgroundColor'
          ];
  
          // drawer is created as global property solely for debug purposes.
          // doing  in production is considered as bad practice
          window.drawer = new DrawerJs.Drawer(null, {
              plugins: drawerPlugins,
              corePlugins: [
                  'Zoom' // use null here if you want to disable Zoom completely
              ],
              pluginsConfig: {
                  Image: {
                      scaleDownLargeImage: true,
                      maxImageSizeKb: 10240, //1MB
                      cropIsActive: true
                  },
                  BackgroundImage: {
                      scaleDownLargeImage: true,
                      maxImageSizeKb: 10240, //1MB
                      imagePosition: 'center',  // one of  'center', 'stretch', 'top-left', 'top-right', 'bottom-left', 'bottom-right'
                      acceptedMIMETypes: ['image/jpeg', 'image/png', 'image/gif'] ,
                      dynamicRepositionImage: true,
                      dynamicRepositionImageThrottle: 100,
                      cropIsActive: false
                  },
                  Text: {
                      editIconMode : false,
                      editIconSize : 'large',
                      defaultValues : {
                        fontSize: 72,
                        lineHeight: 2,
                        textFontWeight: 'bold'
                      },
                      predefined: {
                        fontSize: [8, 12, 14, 16, 32, 40, 72],
                        lineHeight: [1, 2, 3, 4, 6]
                      }
                  },
                  Zoom: {
                      enabled: true, 
                      showZoomTooltip: true, 
                      useWheelEvents: true,
                      zoomStep: 1.05, 
                      defaultZoom: 1, 
                      maxZoom: 32,
                      minZoom: 1, 
                      smoothnessOfWheel: 0,
                      //Moving:
                      enableMove: true,
                      enableWhenNoActiveTool: true,
                      enableButton: false
                  }
              },
              toolbars: {
                  drawingTools: {
                      position: 'top',         
                      positionType: 'inside',
                      customAnchorSelector: '#custom-toolbar-here',  
                      compactType: 'scrollable',   
                      hidden: false,     
                      toggleVisibilityButton: false,
                      fullscreenMode: {
                          position: 'top', 
                          hidden: false,
                          toggleVisibilityButton: false
                      }
                  },
                  toolOptions: {
                      position: 'bottom', 
                      positionType: 'inside',
                      compactType: 'scrollable',
                      hidden: false,
                      toggleVisibilityButton: false,
                      fullscreenMode: {
                          position: 'bottom',
                          positionType: 'inside', 
                          compactType: 'scrollable',
                          hidden: false,
                          toggleVisibilityButton: false
                      }
                  },
                  settings : {
                      position : 'right', 
                      positionType: 'inside',					
                      compactType : 'scrollable',
                      hidden: false,	
                      toggleVisibilityButton: false,
                      fullscreenMode: {
                          position : 'right', 
                          hidden: false,
                          toggleVisibilityButton: false
                      }
                  }
              },
               defaultImageUrl: 'img/gambar.jpg',
              defaultActivePlugin : { name : 'Pencil', mode : 'lastUsed'},
              debug: true,
              activeColor: 'black',
              transparentBackground: true,
              align: 'left',  //one of 'left', 'right', 'center', 'inline', 'floating'
              lineAngleTooltip: { enabled: true, color: 'blue',  fontSize: 15}
          }, 335, 418);
  
          $('#canvas-editor').append(window.drawer.getHtml());
          window.drawer.onInsert();
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

 <?php

 echo $OUTPUT->footer();
 ?>