<?php 
require_once 'head.php';
require_once '../admin/connexion.php';
require_once 'navbar.php';

if(isset($_POST['submit'])){

    $food = $_POST['food'];
    $price = $_POST['price'];
    $quantité = $_POST['qty'];
    $total =$price * $quantité;
    $order_date = date("Y-m-d h:i:sa");
    $status = "ordered";
    $customer_name = $_POST['full-name'];
    $customer_contact = $_POST['contact'];
    $customer_email =$_POST['email'];
    $customer_address = $POST['address'];

    $sql = "INSERT INTO order SET 
    food"
}
?>


<body>
    <section class="food-search">
        <div class="container">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form action="" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <?php 
                    $id =(int)$_GET['id'];
                    $req =$conn->query("SELECT * FROM food WHERE id = $id");
                    $user= $req-> fetch();
                        ?>
                    <div class="food-menu-img">
                        <img src="../images/<?php echo $user['image']; ?>" alt="food" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?=$user['titre']?></h3>
                        <input type="hidden" name="food" value="<?php $user['titre']; ?>">
                        <p class="food-price"><?=$user['price']?>€</p>
                        <input type="hidden" name="price" value="<?=$user['price']?>€">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>
                </fieldset>
            

                <fieldset class="text-center">
                    <legend>Détail de commande</legend>
                    <div class="order-label">Nom complét</div>
                    <input type="text" name="full-name" placeholder="Nom complét" class="input-responsive" required>

                    <div class="order-label">Numéro portable</div>
                    <input type="tel" name="contact" placeholder="Numéro portable" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Votre email" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="Votre adresse" class="input-responsive" required></textarea>

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