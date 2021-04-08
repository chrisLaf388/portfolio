<?php 
  ob_start();
  require("../utile/formatage.php");
?>

<div id="carouselExampleIndicators" class="carousel carousel-dark slide perso_degrade" data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="../img/springBoot.png" class="d-block mx-auto w-75 h-75" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/python.png" class="d-block w-75 h-75 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/vuejs.webp" class="d-block w-75 h-75 mx-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

<!-- bouton telecharger CV -->
<div class="text-center mt-5">
  <a id="downloadcv" class="btn btn-danger rounded-pill font-size" href="../CV-Lafenetre.pdf" download="CV-lafenetre">Télécharger mon CV</a>
</div>
<!-- Présentation en vidéo -->
<!-- <div id ="presentation" class="container text-center">
  ?php echo formatageTitre("Christophe - Concepteur développer"); ?>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/EFRKktxvgbg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>  
</div> -->

<!-- Compétences -->
<div id="competences" class="container text-center">
  <?php echo formatageTitre("Mes compétences"); ?>
  <div class="row">
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <h3>HTML/CSS</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <h3>Javascript</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <h3>SQL</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <h3>Java</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <h3>VueJs</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <h3>SpringBoot</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>  
  </div>
</div>

<!-- Mon porteFolio -->
<div id="portefolio" class="container text-center">
  <?php echo formatageTitre("Mon portfolio"); ?>
  <div class="card-group mx-auto">
    <!-- Card 1  -->
    <div class="card">
      <div class="card-header bg-transparent border-success">Scrapping - Python</div>
      <div class="card-img-top">
        <img src="../img/python.png" class="d-block mx-auto w-100 h-100" alt="...">
      </div>
      <div class="card-footer bg-transparent border-success">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projetModal1">En savoir plus</button>
      </div>
    </div>
    <!-- Card 2  -->
    <div class="card">
      <div class="card-header bg-transparent border-success">Webhook - SpringBoot</div>
      <div class="card-img-top">
        <img src="../img/springBoot.png" class="d-block mx-auto w-100 h-100" alt="...">
      </div>
      <div class="card-footer bg-transparent border-success">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projetModal2">En savoir plus</button>
      </div>
    </div>
    <!-- Card 3  -->
    <div class="card">
      <div class="card-header bg-transparent border-success">Gsb - SpringBoot</div>
      <div class="card-img-top">
        <img src="../img/vuejs.webp" class="d-block mx-auto w-100 h-100" alt="...">
      </div>
      <div class="card-footer bg-transparent border-success">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projetModal3">En savoir plus</button>
      </div>
    </div>
    
  </div>
</div>

<!-- Modal 1-->
<div class="modal fade" id="projetModal1" tabindex="-1" aria-labelledby="projetModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Scrapping - Python</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100 d-block" src="../img/python.png" alt="">
        Recupération de contact via Qualibat, vite un depanneur, google <br/>
        Lien github : <a href="https://github.com/chrisLaf388/viteUnDepanneur.git">Vite un viteUnDepanneur</a>
        <a href="https://github.com/chrisLaf388/ScrapingQualibat.git"> Qualibat</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="projetModal2" tabindex="-1" aria-labelledby="projetModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Webhook - SpringBoot</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100 d-block" src="../img/springBoot.png" alt="">
        Webhook qui recoit des messages et les affiche sous forme json dans l'api ou dans un fichier .txt 
        Ce Webhook est installé sur une machine debian et Utilise le serveur tomcat<br/>
        Lien github : <a href="https://github.com/chrisLaf388/webhookDockerTomcat.git">Webhook</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 3-->
<div class="modal fade" id="projetModal3" tabindex="-1" aria-labelledby="projetModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gsb - SpringBoot</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100 d-block" src="../img/vuejs.webp" alt="">
        Application web codé avec VueJs pour le front et avec Spring Boot pour le back. Cette application permet la rédaction de rapport et la visualisation de ces derniers par les membres de GSB<br/>
        Lien github : <a href="https://github.com/Cindy2307/gsb-front-2.git">front</a> <br/>
        <a href="https://github.com/Cindy2307/gsb-back.git">Back</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Témoignages 
<div id="temoignages" class="container text-center">
<!?php echo formatageTitre("Témoignages"); ?>
  <div class="row">
    <!-- Témoignage1 
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <img src="../img/tmg01.jpg" class="d-block mx-auto w-75 rounded-circle " alt="...">
      <h3 class="m-3">Société XXX</h3>
      <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam et corrupti ad odio sunt laborum fugit ab quas! Molestias optio voluptas nemo ipsum sit quibusdam quaerat cum quia sed voluptatibus.
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <img src="../img/tmg02.jpg" class="d-block mx-auto w-75 rounded-circle " alt="...">
      <h3 class="m-3">Société XXX</h3>
      <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam et corrupti ad odio sunt laborum fugit ab quas! Molestias optio voluptas nemo ipsum sit quibusdam quaerat cum quia sed voluptatibus.
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 my-4">
      <img src="../img/tmg03.jpg" class="d-block mx-auto w-75 rounded-circle " alt="...">
      <h3 class="m-3">Société XXX</h3>
      <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam et corrupti ad odio sunt laborum fugit ab quas! Molestias optio voluptas nemo ipsum sit quibusdam quaerat cum quia sed voluptatibus.
      </div>
    </div>
  </div>
</div>
-->
<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>