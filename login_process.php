<?php
// Connexion à la base de données
$host = 'localhost';
$db = 'sql_injection_demo';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion: " . $conn->connect_error);
}

// Récupération des données du formulaire
$username = addslashes($_POST['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si l'utilisateur existe, on récupère ses informations
    $user_data = $result->fetch_assoc();

    // Stockage des données de l'utilisateur dans la session
    session_start();
    $_SESSION['user'] = $user_data;

    // Redirection vers la page de succès
    header("Location: success.php");
} else {
    // Si la connexion échoue, on affiche la requête SQL utilisée
    header("Location: index.php?error=1&sql=" . urlencode($sql));
}

$conn->close();
?>
