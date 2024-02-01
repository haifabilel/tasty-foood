<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';
?>
<div class="form-container">
    <form action="" method="POST">
        <h3>Ajouter catégorie</h3>
        <table>
            <tr>
        <input type="text" name="title" required placeholder="entrer un nom de catégorie">
        <label >Featured</label>
        <input type="radio" name="featured" value="Oui">Oui
        <input type="radio" name="featured" value="Non">Non <br>
        <label >Active</label>
        <input type="radio" name="active" value="Oui">Oui
        <input type="radio" name="active" value="Non">Non
        <input type="submit" name="submit" value="Valider" class="btn">
        </table>
    </form>
  </div>