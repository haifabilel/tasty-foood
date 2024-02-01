
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