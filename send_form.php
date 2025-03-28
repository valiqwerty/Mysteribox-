
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];

    $to = "croitoruvalentin872@gmail.com";
    $subject = "Comandă Mystery Box";
    $message = "Nume: $name\nTelefon: $phone\nAdresă: $address\nOraș: $city\nCod Poștal: $postal";
    $headers = "From: no-reply@mysterybox.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Comanda a fost trimisă cu succes!";
    } else {
        echo "Eroare la trimiterea comenzii.";
    }
}
?>
