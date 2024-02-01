<?php 
require_once '../templates/head.php';
require_once 'menu.php'
?>
<body>
    <!-- Section content starts -->
    <div class="main-conetent">
        <div class="wrapper">
           <h1 class="text-center">Management admin</h1>
           <a href="add_admin.php" class="btn btn-primary">Add admin</a>
           <table class="minimalistBlack text-center">
            <thead >
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Actions</th>
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
        </div> 
    </div>
    <!-- Section content ends -->
    
</body>