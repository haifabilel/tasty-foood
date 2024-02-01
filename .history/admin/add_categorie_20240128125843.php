<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];

    if (isset($_POST['featured'])) {
        $featured = $_POST['featured'];
    }else{
        $featured = "Non";
    }
    if (isset($_POST['active'])) {
        $active = $_POST['active'];
    }else{
        $active = "Non";
    }
    $sql= "INSERT INTO category SET title ='$title',featured= '$featured', active = '$active' ";
    $query = $conn->prepare($sql);
    
    header('location:management_categorie.php');
}
?>
<div 
    <form action="" method="POST">
        <h3>Ajouter catégorie</h3>
        <table class="table_cat">
           <tr>
            <td>
               Nom :
            </td>
            <td>
                 <input type="text" name="title" placeholder="Nom de catégorie">
            </td>
           </tr>
           <tr>
              <td>Featured</td>
              <td>
                 <input type="radio" name="featured" value="Oui">Oui 
                 <input type="radio" name="featured" value="Non">Non
              </td>
           </tr>
           <tr>
              <td>Active</td>
              <td>
                 <input type="radio" name="active" value="Oui">Oui 
                 <input type="radio" name="active" value="Non">Non
              </td>
           </tr>
           <tr>
            <td colspan="2">
               <input type="submit" name="submit" value="Valider" class="btn btn-primary">
            </td>
           </tr>
        </table>
    </form>
