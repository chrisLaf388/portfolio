<?php 
    ob_start(); 
    require("../utile/formatage.php");
?>

<!-- fonction mail -->
<?php 
    if(isset($_POST['valider'])){
        $to = "christophe.lafenetre@gmail.com";
        $from = $_POST['mail'];
        $object = $_POST['objet'];
        $message = $_POST['message'];
        mail($to,$object,$message,$from);
        echo '<div class="alert alert-success" role="alert">Message Envoyé</div>';
    }
?>

<div class="container text-center m-5">
    <?php echo formatageTitre("Page de contact"); ?>
    <table class="table table-borderless">
        <thead>
            <tr>
                <td><img src="../img/tel.png" class="d-block mx-auto rounded-circle " alt="..."></td>
                <td><img src="../img/github.png" class="d-block mx-auto rounded-circle " alt="..."></td>
                <td><img src="../img/linkedin.jpg" class="d-block mx-auto rounded-circle w-3" alt="..."></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0600040201</td>
                <td><a href="https://github.com/chrisLaf388" target="_blank">Github</a></td>
                <td><a href="www.linkedin.com/in/christophe-lafenetre-05401a17a" target="_blank">linkedin</a></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container text-center m-5">
    <h2 class="mb-5">Formulaire de contact</h2>
    <div class="row justify-content-center">
        <form method="post" action="" class="col-md-6 mb-5">
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Adresse Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mail">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Objet</label>
                <select class="form-control" id="exampleFormControlSelect1" name="objet">
                    <option>Prise de rendez vous</option>
                    <option>Proposition de mission</option>
                    <option>Autres</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="valider">Valider</button>
        </form>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>