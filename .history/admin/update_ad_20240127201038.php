<?php
require_once ('connexion.php');
if(isset($_GET['id']) and !empty($_GET['id'])) {
//Caster avec int
 $id =(int)$_GET['id'];
 $req =$conn->prepare("SELECT * FROM admin WHERE id =:id");
 //Sécuriser contre les injections sql
 $req->bindValue(':id', $id, PDO::PARAM_INT);
 $req->execute();
 $row = $req->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
  extract($_POST);
  if(isset($name) && isset($email)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE admin SET name = '$name' , email = '$email' WHERE id = $id ");
    
   }
  }
}
?>
 <div class="form-container">
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
      <input type="email" class="form-control" name="email" placeholder="email"required></input><br>
  </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="update" class="btn btn-primary" >Valider</button>
      </div>
    </div>
 </form>
 </div>