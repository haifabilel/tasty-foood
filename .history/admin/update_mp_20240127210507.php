<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';

?>
 <div class="main-conetent">
        <div class="wrapper">
           <h2 class="text-center">Changer mot de passe</h2>
           <div class="form-container">
            <form action="" method="post">
                <input type="password" name="ancien_psw" required placeholder="entrer votre ancien mot de passe">
                <input type="password" name="new_password" required placeholder="entrer un nouveau mot de passe">
                <input type="password" name="cpassword" required placeholder="confirmer votre mot de passe">
                <input type="hidden">
                <input type="submit" name="submit" value="Valider" class="form-btn">
            </form>
        </div>
        </div>
 </div>