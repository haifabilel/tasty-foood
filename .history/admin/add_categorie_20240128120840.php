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
            <td>
                <input type="text" name="title" placeholder="Nom de catégorie">
            </td>
           </tr>
           <tr>
              <td>Featured</td>
              <td>
                 <input type="radio" name="featured" value="Oui"><button type="button" class="btn btn-outline-primary"></button>
              </td>
           </tr>
        </table>
    </form>
  </div>