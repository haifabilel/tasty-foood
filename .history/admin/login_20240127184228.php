<?php
require_once ('connexion.php');
require_once ('../templates/head.php');
require_once ('menu.php');

if (!empty($_POST)) {
    if (isset($_POST["email"], $_POST["password"], $_POST["cpassword"]) && 
        !empty($_POST["email"]) && 
        !empty($_POST["password"]) && 
        !empty($_POST["cpassword"])
    ) {

        // Sécuriser contre les injections SQL
        $sql = "SELECT * FROM admin WHERE `email` = :email";
        $query = $conn->prepare($sql);
        $query->bindValue(":email", htmlspecialchars($_POST["email"]), PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();

        // Échapper les caractères spéciaux
        if (!filter_var(htmlspecialchars($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Votre email n'est pas valide";
        } elseif (!$user || !password_verify($_POST["password"], $user['password'])) {
            $errors['password'] = "Votre mot de passe n'est pas valide";
        } elseif ($_POST["password"] !== $_POST["cpassword"]) {
            $errors['cpassword'] = "Les mots de passe ne correspondent pas";
        } else {
            // Authentification réussie, rediriger vers la page appropriée
            header('Location:index.php');
            exit();
        }
    }
}
?>

<section class="registre-section">
<?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
  <div class="form-container">
            <form action="" method="post">
              <h2>Login</h2>
                <div class="title">
                    <img src="../uploads/images/Logo1.png" alt="" class="logo">
                </div>
                <div class="input-field">
                    <p>Adresse email<sup>*</sup></p>
                    <input type="email" name="email" placeholder=" Adresse email" required>
                </div>
                <div class="input-field">
                    <p>Password<sup>*</sup></p>
                    <input type="password" name="password" placeholder=" Votre password" required>
                </div>
                <div class="input-field">
                    <p>Confirmer password<sup>*</sup></p>
                    <input type="password" name="cpassword" placeholder=" Confirmer votre password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-4">Valider</button>
            </form>
        </div>
</section>

<?php

?>