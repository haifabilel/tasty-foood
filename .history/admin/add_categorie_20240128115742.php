<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';
?>
<div class="form-container">
    <form action="" method="POST">
        <h3>Ajouter catégorie</h3>
        <input type="text" name="title" required placeholder="entrer un nom de catégorie">
        <input type="radio" name="featured" >
        <input type="password" name="password" required placeholder="entrer un mot de passe">
        <input type="password" name="cpassword" required placeholder="confirmer votre mot de passe">
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login.php">login now</a></p>
    </form>
  </div>