<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['check-in-reserve']) && isset($_POST['check-out-reserve'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkIn = $_POST['check-in-reserve'];
    $checkOut = $_POST['check-out-reserve'];

    $reservation = "Name: $name, Email: $email, Check-in: $checkIn, Check-out: $checkOut\n";
    file_put_contents('reservations.txt', $reservation, FILE_APPEND);

    echo "Reservation successful!";
} else {
    echo "Invalid request.";
}
?>
