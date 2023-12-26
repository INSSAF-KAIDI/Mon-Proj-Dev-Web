<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Adresse e-mail où envoyer le message
    $to = "votre@email.com";

    // Sujet du message
    $subject = "Nouveau message de $name";

    // Corps du message
    $messageBody = "Nom: $name\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Message:\n$message";

    // En-têtes du message
    $headers = "From: $email";

    // Envoyer l'e-mail
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    // Redirection si la page est accédée directement
    header("Location: login.php");
    exit();
}
?>