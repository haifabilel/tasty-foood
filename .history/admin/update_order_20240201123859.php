<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $price = $_POST['price'];
    $quantite = $_POST['qty'];
    $status = $_POST['status'];
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];
    
    $update= "UPDATE order_food SET 
    qty = $quantite",
    status = 
    }
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update order</h1>
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql= $conn->query("SELECT * FROM order_food WHERE  id=$id");
            while($user = $sql->fetch()){
        
        ?>
        <form action="" method="POST">
            <table class="">
                <tr>
                    <td>Menu</td>
                    <td><?=$user['titre']?></td>
                </tr>
                <tr>
                    <td>Prix</td>
                    <td><?=$user['price']?>€</td>
                   </tr>
                   <tr>
                    <td>Quanité</td>
                    <td>
                        <input type="number" name="qty" value="<?=$user['qty']?>">
                    </td>
                   </tr>
                   <tr>
                    <td>Status</td>
                    <td>
                        <select name="" id="">
                            <option value="En attente">En attente</option>
                            <option value="En cour de préparation">En cour de préparation</option>
                            <option value="livré">livré</option>
                            <option value="Effacer">Effacer</option>
                        </select>
                    </td>
                   </tr>
                   <tr>
                    <td>Nom client: </td>
                    <td>
                        <input type="text" name="customer_name" value="<?=$user['customer_name']?>">
                    </td>
                   </tr>
                   <tr>
                    <td>Contact client: </td>
                    <td>
                        <input type="text" name="customer_contact" value="<?=$user['customer_contact']?>">
                    </td>
                   </tr>
                   <tr>
                    <td>Email client: </td>
                    <td>
                        <input type="text" name="customer_email" value="<?=$user['customer_email']?>">
                    </td>
                   </tr>
                   <tr>
                    <td>Adresse client: </td>
                    <td>
                        <input type="text" name="customer_address" value="<?=$user['customer_address']?>">
                    </td>
                   </tr>
                   <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?=$user['id'];?>">
                        <input type="hidden" name="price" value="<?=$user['price'];?>">
                        <input type="submit" class="btn btn-primary" name="submit" value="update">
                    </td>
                   </tr>
            </table>
        </form>
        <?php 
        };
    };
        ?>
    </div>
</div>