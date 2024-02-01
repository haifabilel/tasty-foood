<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';

?>
 <div class="main-conetent">
        <div class="wrapper">
           <h1>Changer mot de passe</h1>
           <div class="form-container">
            <form action="" method="post">
                <div class="input-field">
                    <p>Ancien mot de passe<sup>*</sup></p>
                    <input type="password" name="ancien_psw" placeholder=" Ancien mot de passe " required>
                </div>
                <div class="input-field">
                    <p>Password<sup>*</sup></p>
                    <input type="password" name="password" placeholder=" No" required>
                </div>
                <div class="input-field">
                    <p>Confirmer password<sup>*</sup></p>
                    <input type="password" name="cpassword" placeholder=" Confirmer votre password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-4">Valider</button>
            </form>
        </div>
        </div>
 </div>