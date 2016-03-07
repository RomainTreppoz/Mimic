<?php $this->layout('layout', ['title' => 'Se connecter', 'nav'=>'login']) ?>

<?php $this->start('main_content') ?> 
<div class="container-fluid">


    <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        
        <h2 id="titleMain">Bienvenue, vous pouvez vous connecter !</h2>
        
        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/006_joie.jpg")?>"class="mimic img-responsive" name="texte1" alt="mimique de joie">
        </div> <!-- div col-md-4 -->


      
        <div class="col-md-6">

       
          <form class="form-container" id="positionFormLogin" method="POST" action="<?= $this->url('loginUser'); ?>">
         
            <div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
              <input type="text" class="form-control espaceInput" id="email" name="email" placeholder="Adresse électronique">

              <?php if(isset($errors['mail'])): ?>
                <span   class="help-block"><p class="bg-danger msgErrorTaille"><?= $errors['mail']; ?><p></span>
              <?php endif; ?>

            </div>


            <div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
              
              <input type="password" class="form-control espaceInput" id="password" name="password" placeholder="Mot de passe">
                <?php if(isset($errors['login'])): ?>
              <span   class="help-block"><p class="bg-danger msgErrorTaille"><?= $errors['login']; ?><p></span>
              <?php endif; ?>

            </div>

            <!-- L'utilisateur ne peut se connecter : on lui propose des alternatives -->
            <div class="form-group">
              <p class="btn btn-default btn-xs"><a href="forgotPassword.php">Mot de passe oublié ?</a></p>
              <a class="btn btn-default btn-xs" type="button" href="<?= $this->url('register'); ?>"> Pas encore membre ?</a>
            </div>

            <button type="submit" class="btn btn-warning btn-lg" id="btnEnvoyer" name="action">
              <span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>   OK
            </button>

          </form> <!-- formulaire de login -->
        </div> <!-- div col-md-6 -->
        
      </div> <!-- col-md-12 -->

    </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>

