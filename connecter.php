<?php
session_start();
require_once "connexion_bd.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['VALIDER'])) {
    global $bd;
    $password = htmlentities($_POST['password']);
    $email = htmlentities($_POST['email']);

    // Définir un tableau de tables utilisateur à vérifier
    $userTables = ['users', 'associations', 'membres'];

    $userFound = false; // Variable pour vérifier si un utilisateur a été trouvé

    foreach ($userTables as $table) {
        $stmt = $bd->prepare("SELECT * FROM $table WHERE email = :email AND password = :password");
        $stmt->execute(['email' => $email, 'password' => $password]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Stocker les informations utilisateur en session
            $_SESSION['user'] = $user;

            // Redirection vers des pages si des conditions sont respectées
            if ($table === 'users') {
                header('Location: dashbord.php?succes=true');
            } elseif ($table === 'associations') {
                echo "true";
            } elseif ($table === 'membres') {
                echo "validé";
            }
            $userFound = true; // Utilisateur trouvé
            exit;
        }
    }

    if (!$userFound) {
        // Si aucun utilisateur n'est trouvé dans aucune table, redirigez avec un message d'erreur
        header('Location: index.php?echec=true');
        exit;
    }
}
?>
