<?php $this->layout('layout', ['title' => 'S\'enregistrer', 'nav'=>'register']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">

      <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        <h2 id="titleMain">Bienvenue, futur mimicstriper / euse !</h2>

        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/006_Joie.jpg")?>"class="mimic img-responsive" name="texte1" alt="mimique de joie">
        </div> <!-- div col-md-4 -->
       
        <div class="col-md-6">


<div class="col-md-6 col-md-offset-3">

    <form class="form-container" method="POST" action="<?= $this->url('registerUser'); ?>">
      <div class="form-group <?php if(isset($errors['email'])) echo 'has-error' ?>">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Email">
        <?php if(isset($errors['email'])): ?>
          <span class="help-block"><?= $errors['email']; ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
        <label for="password">Password :</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <?php if(isset($errors['password'])): ?>
          <span class="help-block"><?= $errors['password']; ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="confirmPassword">Confirm Password :</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>        

        
         
            <div class="form-group">
                    <label for="email">Adresse électronique</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="passwordConfirm">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password">
                  </div>

                  <button type="submit" class="btn btn-warning btn-lg" id="btnEnvoyer" name="action">
                    <span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>   OK
                  </button>

        
        </div> <!-- div col-md-6 -->

      </div> <!-- col-md-12 -->

    </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>

