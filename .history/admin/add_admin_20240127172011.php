<?php 
require_once '../templates/head.php';
require_once 'menu.php'
?>
<div class="form-container">
    <form action="" method="POST">
        <h3>Registre now</h3>
        <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder="entrer votre nom complét">
        <input type="email" name="email" required placeholder="entrer un email">
        <input type="password" name="password" required placeholder="entrer un mot de passe">
        <input type="password" name="cpassword" required placeholder="confirmer votre mot de passe">
        n value="employe">employé</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
    </form>
  </div>