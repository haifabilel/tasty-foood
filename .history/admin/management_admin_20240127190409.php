<?php 
require_once '../templates/head.php';
require_once 'menu.php'
?>
<body>
    <!-- Section content starts -->
    <div class="main-conetent">
        <div class="wrapper">
           <h1 class="text-center">Management admin</h1>
           <a href="add_admin.php" class="btn btn-primary" id="add">Ajouter admin</a>
           <table class="minimalistBlack text-center">
            <thead>
                <tr>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
     $req = $conn->query('SELECT * FROM avis_clients');
     while($user = $req->fetch()){
        ?>
        <tr>
            <td><?=$user['user_name']?></td>
            <td><?=$user['user_rating']?></td>
                    <td>
                        <a href="delete_ad.php" class="btn_delete">Delete</a>
                        <a href="Update_ad.php" class="btn_update">Update</a>
                    </td>
                </tr>
             </tbody>
           </table>
        </div> 
    </div>
    <!-- Section content ends -->
    
</body>