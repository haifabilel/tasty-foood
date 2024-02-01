<?php 
require_once 'head.php';
require_once '../admin/connexion.php';
require_once 'navbar.php';



if(isset($_POST['submit'])){

    $titre = $_POST['titre'];
    $price = $_POST['price'];
    $quantite = $_POST['qty'];
    // $total = $price * $quantite;
    $order_date = time();
    $status = "ordered";
    $customer_name = $_POST['fullname'];
    $customer_contact = $_POST['contact'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];

    $sql = "INSERT INTO `order_food` (titre, price, qty, order_date, status, customer_name, customer_contact, customer_email, customer_address) VALUES (
        :titre, :price, :qty, :order_date, :status, :customer_name, :customer_contact, :customer_email, :customer_address)";
    
    $query = $conn->prepare($sql);

    $query->bindParam(':titre', $titre);
    $query->bindParam(':price', $price);
    $query->bindParam(':qty', $quantite);
    // $query->bindParam(':total', $total);
    $query->bindParam(':order_date', $order_date);
    $query->bindParam(':status', $status);
    $query->bindParam(':customer_name', $customer_name);
    $query->bindParam(':customer_contact', $customer_contact);
    $query->bindParam(':customer_email', $customer_email);
    $query->bindParam(':customer_address', $customer_address);
    
    if ($query->execute()) {
        $errors[] = "Merci d'avoir passer une commande chez nous!";
    } 
    
}

?>


<body>

    <section class="food-search">
        <div class="container">
        <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form method="POST" enctype="multipart/form-data" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <?php 
                   if (isset($_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $req = $conn->query("SELECT * FROM food WHERE id = $id");
                    
                    if ($req) {
                        while ($user = $req->fetch()) {
                            ?>
                    <div class="food-menu-img">
                        <img src="../images/<?php echo $user['image']; ?>" alt="food" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?=$user['titre']?></h3>
                        <input type="hidden" name="titre" value="<?php$user['titre']; ?>">
                        <p class="food-price"><?=$user['price']?>€</p>
                        <input type="hidden" name="price" value="<?=$user['price']?>€">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
                    <?php }
                    } }  ?>
                </fieldset>
            

                <fieldset class="text-center">
                    <legend>Détail de commande</legend>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="order-label">Nom complét</div>
                    <input type="text" name="fullname" placeholder="Nom complét" class="input-responsive" required>

                    <div class="order-label">Numéro portable</div>
                    <input type="tel" name="contact" placeholder="Numéro portable" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Votre email" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <input name="address" rows="10" placeholder="Votre adresse" class="input-responsive" required></input>

                    <input type="submit" name="submit" value="Confirmer commande" class="btn btn-primary">
                </fieldset>
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Vijay Thapa</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>