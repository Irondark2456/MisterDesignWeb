<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $discord = htmlspecialchars($_POST['discord']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Préparation du contenu de l'email
    $to = "mistercat2456@gmail.com";
    $subject = "Nouveau message du formulaire de contact";
    $body = "
    Nom: $name\n
    Email: $email\n
    Pseudo Discord: $discord\n
    Service demandé: $service\n
    Message:\n$message
    ";
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci! Votre message a été envoyé avec succès.";
    } else {
        echo "Désolé, une erreur s'est produite. Veuillez réessayer.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>
