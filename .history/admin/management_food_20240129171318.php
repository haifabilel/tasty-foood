<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';
?>
    <!-- Section content starts -->
    <div class="main-conetent">
        <div class="wrapper">
           <h1 class="text-center">Management Food</h1>
           <a href="add_admin.php" class="btn btn-primary" id="add">Ajouter admin</a>
           <table class="minimalistBlack text-center">
            <thead>
                <tr>
                    <th class="text-center">Food</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">status</th>
                    <th class="text-center">customer_name</th>
                    <th class="text-center">customer_email</th>
                    <th class="text-center">customer_contact</th>
                    <th class="text-center">customer_adress</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <?php
    $req = $conn->query('SELECT * FROM order_food');
    while($user = $req->fetch()){
       ?>
        <tr>
            <td><?=$user['titre']?></td>
            <td><?=$user['price']?></td>
            <td><?=$user['qty']?></td>
            <td><?=date('l jS, F Y h:i:s A', $user["order_date"])?></td>
            <td><?=$user['status']?></td>
            <td><?=$user['customer_name']?></td>
            <td><?=$user['customer_contact']?></td>
            <td><?=$user['customer_email']?></td>
            <td><?=$user['customer_address']?></td>
                    <td>
                        <a href="delete_ad.php" class="btn_delete">Delete</a>
                        <a href="Update_ad.php" class="btn_update">Update</a>
                    </td>
                </tr>
                <?php
                }
                ?>
             </tbody>
           </table>
        </div> 
    </div>
    <!-- Section content ends -->
   
