<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';
?>
    <!-- Section content starts -->
    <div class="main-conetent">
        <div class="wrapper">
           <h1 class="text-center">Management Food</h1>
           <button class="btn btn-primary" id="add"  data-bs-toggle="modal" data-bs-target="#addCa">Ajouter food</button>
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
   <!-- Modal ajout food-->
<div class="modal fade" id="addCa" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form  method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter food</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
       <input type="text" name="titre" class="form-control"  placeholder="Titre" required><br>
      </div>
      <div class="form-group">
       <input type="number" name="price" class="form-control"  placeholder="Prix de repas" required><br>
      </div>
      <div class="form-group">
    <textarea class="form-control" name="description" placeholder="Description..."required></textarea><br>
  </div>
  <div class="form-group mb-3">
  <input type="file" name="image" class="form-control">
</div>
      
      </div>
      <div class="modal-footer">
      <button type="submit" name="addCat" class="btn btn-primary" >Valider</button>
      </div>
    </div>
     </form>
  </div>
</div>
<?php require_once 'footer_ad.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

