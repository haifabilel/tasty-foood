<?php 
require_once '../templates/head.php';
require_once 'menu.php';
?>
<body>
    <!-- Section content starts -->
    <div class="main-conetent">
        <div class="wrapper">
           <h1 class="text-center">Management catégorie</h1>
           <a href="add_admin.php" class="btn btn-primary" id="add">Ajouter catégorie</a>
           <table class="minimalistBlack text-center">
            <thead>
                <tr>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>cell1_1</td>
                    <td>cell2_1</td>
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

<?php require_once 'footer_ad.php' ?>