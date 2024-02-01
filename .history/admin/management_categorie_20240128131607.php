<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';
if(isset($_POST['submit'])){
    $titre = $_POST['titre'];
    $desc = $_POST['description'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "../uploads/".$img_name;
    move_uploaded_file($img_loc,'../uploads/'.$img_name);
// Sécuriser contre les injections SQL
    $query = "INSERT INTO services (titre ,description, image)
    VALUES (:titre, :description, :image)";
    $statement = $conn->prepare($query);
  
    $data = [
        ':titre' => $titre,
        ':description' => $desc,
        ':image' => $img_des,
    ];
    $stat = $statement->execute($data);
    header('location:fetch_service.php');
};
?>

    <!-- Section content starts -->
    <div class="main-conetent">
        <div class="wrapper">
           <h1 class="text-center">Management catégorie</h1>
           <button data-bs-toggle="modal" data-bs-target="#ServiceAdmin"class="btn btn-primary" id="add">Ajouter catégorie</button>
           <table class="minimalistBlack text-center">
            <thead>
                <tr>
                <th class="text-center">Image</th>
                <th class="text-center">Titre</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $req = $conn->query('SELECT * FROM services');
            while($user = $req->fetch()){
                ?>
                <tr>
                <td><img class="img_service" src="../uploads/<?php echo $user['image']; ?>" alt="image_card"></td>
                <td><?=$user['titre']?></td>
                <td><?=$user['description']?></td>
                <td>
                        <a href="delete_ad.php" class="btn_delete">Delete</a>
                        <a href="Update_ad.php" class="btn_update">Update</a>
                    </td>   
                </tr>
                <?php 
     };
    ?>
             </tbody>
           </table>
        </div> 
    </div>
    <!-- Section content ends -->
<!-- Modal ajout service-->
<div class="modal fade" id="ServiceAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form  method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter service</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      
       <input type="text" name="titre" class="form-control"  placeholder="Titre de service" required><br>
      </div>
      <div class="form-group">
    <textarea class="form-control" name="description" placeholder="Description..."required></textarea><br>
  </div>
  <div class="form-group mb-3">
  <input type="file" name="image" class="form-control">
</div>
      
      </div>
      <div class="modal-footer">
      <button type="submit" name="addService" class="btn btn-primary" >Valider</button>
      </div>
    </div>
     </form>
  </div>
</div>
<?php require_once 'footer_ad.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
