<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = htmlspecialchars($_POST['meno'] ?? '');
    $priezvisko = htmlspecialchars($_POST['priezvisko'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefon = htmlspecialchars($_POST['telefon'] ?? '');
    $sprava = htmlspecialchars($_POST['sprava'] ?? '');

    $to = 'info@decorapanels.sk';
    $subject = 'Nova sprava z webu od ' . $meno . ' ' . $priezvisko;
    $message = "Meno: $meno $priezvisko\nEmail: $email\nTelefon: $telefon\n\nSprava:\n$sprava";
    $headers = "From: info@decorapanels.sk\r\nReply-To: $email";

    mail($to, $subject, $message, $headers);

    echo json_encode(['ok' => true]);
} else {
    http_response_code(405);
}
?>