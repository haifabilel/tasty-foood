<?php 
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
                    <th class="text-center">Actions</th>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Actions</th>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <?php
     $req = $conn->query('SELECT * FROM order');
     while($user = $req->fetch()){
        ?>
        <tr>
            <td><?=$user['food']?></td>
            <td><?=$user['price']?></td>
            <td><?=$user['qty']?></td>
            <td><?=$user['order_date']?></td>
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
   
