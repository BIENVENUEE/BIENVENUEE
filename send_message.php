<?php
session_start();
require_once "connexion_bd.php";

if (!isset($_SESSION['user_id']) && !isset($_SESSION['admin_id'])) {
    echo "Utilisateur non connecté.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
    $message = trim($_POST['message']);
    $senderType = isset($_SESSION['admin_id']) ? 'admin' : 'user';
    $senderId = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : $_SESSION['user_id'];

    if (!empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (user_id, message, sender_type) VALUES (:user_id, :message, :sender_type)");
        $stmt->execute([
            'user_id' => $senderType === 'user' ? $senderId : null,
            'message' => $message,
            'sender_type' => $senderType
        ]);
        echo "Message envoyé.";
    } else {
        echo "Le message est vide.";
    }
} else {
    echo "Données incorrectes.";
}
?>
