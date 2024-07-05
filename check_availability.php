<?php
if (isset($_GET['check_in']) && isset($_GET['check_out'])) {
    $checkIn = $_GET['check_in'];
    $checkOut = $_GET['check_out'];

    // Dummy check availability logic
    $available = rand(0, 1) == 1; // Randomly set availability for demo

    if ($available) {
        echo "Rooms are available from $checkIn to $checkOut.";
    } else {
        echo "No rooms available from $checkIn to $checkOut.";
    }
} else {
    echo "Invalid request.";
}
?>
