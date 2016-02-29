<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Mimicstrips - <?= $this->e($title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $this->assetUrl('/img/mimic.ico') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/stylesheet.css') ?>">
    <!-- TODO: passer en CDN pour la production -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap-theme.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/main.css') ?>">
    <script src="<?= $this->assetUrl('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Affichage barre de navigation -->
    <div id="nav">

      <h2 class="has-success">Mimicstrips</h2>

      <!-- Bloc Login / enregistrement -->
      <?php if(isset($_SESSION['user']['username'])) :?>
      
        <!-- Une session est ouverte : on affiche le nom de l'utilisateur et on propose le logout -->
        <a class="btn btn-warning glyphicon largeurBtn" type="button" href="<?= $this->url('logout'); ?>"> <span class="glyphicon glyphicon-log-out absoluteIcon" aria-hidden="true"></span>Se déconnecter</a>
        <!-- TODO: le clic sur le nom envoie dans l'espace privé -->
        <a class="btn btn-default btn-xs" type="texte"> <?php echo $_SESSION['user']['username']; ?> </a>

      <?php else: ?>

        <!-- pas de connexion : on propose de se connecter ou s'enregistrer -->
        <a class="btn btn-warning glyphicon  largeurBtn" type="button" href="<?= $this->url('login'); ?>"> <span class="glyphicon glyphicon-log-in absoluteIcon" aria-hidden="true"></span>Se connecter</a>
        <a class="btn btn-default btn-xs" type="button" href="<?= $this->url('register'); ?>"> Pas encore membre ?</a>

      
      <?php endif; ?>

      <br><br>


      <!-- Choix du mode d'affichage des strips-->          
      <a class="btn btn-primary glyphicon  largeurBtn" type="button" href="<?= $this->url('home'); ?>"> <span class="glyphicon glyphicon-time absoluteIcon" aria-hidden="true"></span>Les plus récentes</a>
      <br><br>
                
      <a class="btn btn-primary glyphicon  largeurBtn" type="button" href="<?= $this->url('home'); ?>"> <span class="glyphicon glyphicon-arrow-up absoluteIcon" aria-hidden="true"></span>Les mieux notées</a>
      <br><br>
      <a class="btn btn-primary glyphicon  largeurBtn" type="button" href="<?= $this->url('home'); ?>"> <span class="glyphicon glyphicon-random absoluteIcon" aria-hidden="true"></span>Aléatoire</a>
      <br><br>
    


     
      <!-- Recherches de strips-->
      <form id="search-form" method="GET" action="<?= $this->url('home'); ?>">
        <div class="form-group">
          <label for="stripName">Rechercher un strip en fonction de son intitulé</label>
          <input type="text" class="form-control" id="stripName" name="stripName" placeholder="Titre du strip" />
          <button type="submit" class="btn-primary" name="action" value="search">OK</button>
        </div>
      </form>
        <form id="search-form" method="GET" action="<?= $this->url('home'); ?>">
          <div class="form-group">
            <label for="stripName">Rechercher un strip en fonction de son numéro</label>
            <input type="text" class="form-control" id="idstrips" name="idstrips" placeholder="Numéro du strip" />
            <button type="submit" class="btn-primary" name="action" value="search">OK</button>
          </div>
        </form>
        <br><br>

      <!-- Publication de strips -->            
          <a class="btn btn-default glyphicon largeurBtn btn-danger" type="button" href="<?= $this->url('publier'); ?>"> <span class="glyphicon glyphicon-film absoluteIcon" aria-hidden="true"></span>Je veux le faire</a>
          <br><br>
          <br><br>

      <!-- Autres pages (CGU, Aide, Contact, Explications...) -->
          <a class="btn btn-success glyphicon  largeurBtn" type="button" href="<?= $this->url('merci'); ?>"> <span class="glyphicon glyphicon-book absoluteIcon" aria-hidden="true"></span>CGU</a>
          <br><br>
          <a class="btn btn-success glyphicon  largeurBtn" type="button" href="mailto:contact@mimicstrips.com" target="_blank"> <span class="glyphicon glyphicon-pencil absoluteIcon" aria-hidden="true"></span>Contact</a>
          <br><br>
          
          <a class="btn btn-success glyphicon  largeurBtn" type="button" href="<?= $this->url('merci'); ?>"> <span class="glyphicon glyphicon-question-sign absoluteIcon" aria-hidden="true"></span>Aide</a>
          <br><br> 
           
          <a class="btn btn-success glyphicon  largeurBtn" type="button" href="<?= $this->url('merci'); ?>"> <span class="glyphicon glyphicon-heart absoluteIcon" aria-hidden="true"></span>Remerciements</a>
      
    </div>  <!-- nav -->

  <div id="main">           

         <!--  Affiche un message  --> 
    <div class="has-success">
      <?php if(isset($_SESSION['message'])) :?>
          <?= $_SESSION['message']; ?>
          <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
    </div>


   <!--  <div class="container-fluid"> -->
      <div class="has-success">
        <?php if(isset($_SESSION['message'])) :?>
          <?= $_SESSION['message']; ?>
          <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
      </div> 
      <!-- Contenu dynamique -->
      <?= $this->section('main_content') ?>
    <!-- </div>  --><!-- /container-fluid -->
  </div> <!-- /main -->

    
    <footer>  
      <p>&copy; webforce3, mars 2016</p>
    </footer>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
      <script src="<?= $this->assetUrl('js/vendor/bootstrap.min.js')?>"></script>
      <script src="<?= $this->assetUrl('js/plugins.js')?>"></script>
      <script src="<?= $this->assetUrl('js/main.js')?>"></script>
      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
  </body>
</html>
