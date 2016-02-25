<?php $this->layout('layout', ['title' => 'Publier', 'nav'=>'publier']) ?>

<?php $this->start('main_content') ?> 
<div class="container-fluid">

<div class="row">
      <div class="col-md-4">
        <div id="webcam">
          <video width="320" height="320" autoplay></video>
          <button id="snapBtn-1" class="btn btn-primary">Snap 1</button>
          <button id="snapBtn-2" class="btn btn-primary">Snap 2</button>
          <button id="snapBtn-3" class="btn btn-primary">Snap 3</button>
        </div>
      </div>
    </div>

  <form method="POST"  enctype="multipart/form-data" action="<?= $this->url('publierPost'); ?>">
    <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        <h2 id="titleMain">Crée ta propre Story !</h2>

        <div>
          <?php if(isset($errors['image'])): ?>
          <?= $errors['image'] ?>
          <?php endif; ?>

        </div>
        

        <div class="col-md-4">
        <canvas id="snapCanvas-1"></canvas>
          <input id="snapPhotoData-1" name="snapPhotoData-1" type="hidden">
          
          <div class="form-group  ">
            <label for="exampleInputFile">Première photo</label>
            
           
          </div>
          <!--  TEXTE 1 -->
           <textarea class="form-control mimic" id="lol" rows="5" name="texte1" maxlength="255" placeholder="J'écris mon intro ici"></textarea>

        </div>
        <div class="col-md-4">
        <canvas id="snapCanvas-2"></canvas>
          <input id="snapPhotoData-2" name="snapPhotoData-2" type="hidden">
          
          <div class="form-group">
            <label for="exampleInputFile">Deuxième photo</label>

          </div>
          <!-- TEXTE 2 -->
          <textarea class="form-control mimic" rows="5"  id="lol"name="texte2" maxlength="255" placeholder="Et ici la 2e partie de l'histoire"></textarea>

        </div>
        <div class="col-md-4">
        <canvas id="snapCanvas-3"></canvas>
          <input id="snapPhotoData-3" name="snapPhotoData-3" type="hidden">
          
          <div class="form-group">
            <label for="exampleInputFile">Troisième photo</label>
            
          </div>
          <!-- TEXTE 3 -->

          <textarea class="form-control mimic" rows="5" id="lol" name="texte3" maxlength="255" placeholder="Et enfin la chute :D"></textarea>


          <button type="submit" class="btn btn-danger btn-lg" id="btnEnvoyer">
            <span class="glyphicon glyphicon-send"  aria-hidden="true"></span> Envoyer !
          </button>
        </div>

      

        </div>

      </div> <!-- col-md-11 -->


    </div> <!-- row -->

  </form>
</div> <!-- container-fluid -->
<script>
navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);

var width = 320;
var height = 320; 
var streaming = false;

var video = document.querySelector('video');
var snapCanvas1 = document.getElementById('snapCanvas-1');
var snapCanvas2 = document.getElementById('snapCanvas-2');
var snapCanvas3 = document.getElementById('snapCanvas-3');
var snapPhotoData1 = document.getElementById('snapPhotoData-1');
var snapPhotoData2 = document.getElementById('snapPhotoData-2');
var snapPhotoData3 = document.getElementById('snapPhotoData-3');
var snapBtn1 = document.getElementById('snapBtn-1');
var snapBtn2 = document.getElementById('snapBtn-2');
var snapBtn3 = document.getElementById('snapBtn-3');

function clearCanvas(el) {
  var context = el.getContext('2d')
    context.fillStyle = "#AAA";
    context.fillRect(0, 0, el.width, el.height);
}

function takePicture(el, inputEl) {
    var context = el.getContext('2d');
    el.width = width;
    el.height = height;

    context.drawImage(video, 0, 0, width, height);

    var data64 = el.toDataURL('image/png');
    insertData64(inputEl, data64);
}

function insertData64(inputEl, data) {
  inputEl.value = data;
}

function cbSuccess(localMediaStream) {


  video.src = window.URL.createObjectURL(localMediaStream);
  video.addEventListener('canplay', function(e) {
    if(!streaming) {
          height = video.videoHeight / (video.videoWidth/width);

          if (isNaN(height)) {
            height = width / (4/3);
          }

      video.setAttribute('width', width);
          video.setAttribute('height', height);
          snapCanvas1.setAttribute('width', width);
          snapCanvas1.setAttribute('height', height);
          snapCanvas2.setAttribute('width', width);
          snapCanvas2.setAttribute('height', height);
          snapCanvas3.setAttribute('width', width);
          snapCanvas3.setAttribute('height', height);
          streaming = true;
          
      clearCanvas(snapCanvas1);
      clearCanvas(snapCanvas2);
      clearCanvas(snapCanvas3);
    }
  });

  snapBtn1.addEventListener('click', function(e) {
    e.preventDefault();
    takePicture(snapCanvas1, snapPhotoData1);
  });

  snapBtn2.addEventListener('click', function(e) {
    e.preventDefault();
    takePicture(snapCanvas2, snapPhotoData2);
  });

  snapBtn3.addEventListener('click', function(e) {
    e.preventDefault();
    takePicture(snapCanvas3, snapPhotoData3);
  });
}

function cbError(err) {
  console.log("The following error occured: " + err);
}


if(navigator.getUserMedia) {
  navigator.getUserMedia({video: true, audio: false}, cbSuccess, cbError);
}
else {
  console.log('getUserMedia not supported');
}
</script>
<?php $this->stop('main_content') ?>

