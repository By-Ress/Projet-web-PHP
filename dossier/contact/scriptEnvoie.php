<?php

// Verification que la requete est de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récuperation des donnees du formulaire
    $nom = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Validation des donnees
    if (empty($nom) || empty($email) || empty($message)) {
        // Si des donnees sont manquantes
        $res = ["success" => false, "msg" => "Veuillez renseigner tous les champs"];
    } elseif (strlen($nom) >= 10) {
        // Si le nom a plus de 45 caracteres
        $res = ["success" => false, "msg" => "Votre nom doit contenir moins de 45 caractères ( reference au nom le plus long de France)"];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si l'adresse email est invalide
        $res = ["success" => false, "msg" => "Adresse email invalide"];
    } else {
        // Si les données sont valides, insertion dans la base de données
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "myDB";

        // Connexion a la base de donnees
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            // Si la connexion à la base de donnees a echoue
            $res = ["success" => false, "msg" => "Une erreur est survenue lors de la connexion à la base de données"];
        } else {
            // Insertion des donnees dans la base de donnees
            $stmt = $conn->prepare("INSERT INTO users (nom, mail, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nom, $email, $message);

            if ($stmt->execute()) {
                // Si l'insertion a reussi
                $res = ["success" => true, "msg" => "Votre message a bien été envoyé !"];
            } else {
                // Si l'insertion a echoue
                $res = ["success" => false, "msg" => "Une erreur est survenue lors de l'envoi du message"];
            }

            $stmt->close();
            $conn->close();
        }
    }
} else {
    // Si la requete n'est pas de type POST
    $res = ["success" => false, "msg" => "Requête invalide"];
}

// Envoi de la reponse JSON
header('Content-Type: application/json');
echo json_encode($res);
