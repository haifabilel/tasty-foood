<?php 
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
           <a href="add_categorie.php" class="btn btn-primary" id="add">Ajouter catégorie</a>
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