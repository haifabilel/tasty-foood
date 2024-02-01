<?php 
require_once 'connexion.php';
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
     $req = $conn->query('SELECT * FROM admin');
     while($user = $req->fetch()){
        ?>
        <tr>
            <td><?=$user['name']?></td>
            <td><?=$user['email']?></td>
                    <td>
                        <a href="delete_ad.php?id=<?=$user['id']?>" class="btn_delete">Delete</a>
                        <button class="btn_update" data-bs-toggle="modal" data-bs-target="#UpdateAdmin">Update</button>
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
    <!-- Modal update admin -->
    <div class="modal fade" id="UpdateAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form  method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update admin</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      
       <input type="text" name="name" class="form-control"  placeholder="nom complét" required><br>
      </div>
      <div class="form-group">
    <textarea class="form-control" name="email" placeholder="email"required></textarea><br>
  </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="update" class="btn btn-primary" >Valider</button>
      </div>
    </div>
     </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>