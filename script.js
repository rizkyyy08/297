function checkAvailability() {
    const checkIn = document.getElementById('check-in').value;
    const checkOut = document.getElementById('check-out').value;

    if (checkIn && checkOut) {
        fetch(`check_availability.php?check_in=${checkIn}&check_out=${checkOut}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('availability-result').innerText = data;
            });
    } else {
        alert('Please select both check-in and check-out dates.');
    }
}
