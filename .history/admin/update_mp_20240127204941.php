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
            <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
              <h2>Login</h2>
                <div class="title">
                    <img src="../uploads/images/Logo1.png" alt="" class="logo">
                </div>
                <div class="input-field">
                    <p>Adresse email<sup>*</sup></p>
                    <input type="email" name="email" placeholder=" Adresse email" required>
                </div>
                <div class="input-field">
                    <p>Password<sup>*</sup></p>
                    <input type="password" name="password" placeholder=" Votre password" required>
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