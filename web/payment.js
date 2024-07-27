// JavaScript for simulating payment processing

document.addEventListener('DOMContentLoaded', function() {
    const paymentForm = document.getElementById('payment-form');

    if (paymentForm) {
        paymentForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Simulated payment processing delay (2 seconds)
            setTimeout(function() {
                // After processing, redirect to confirmation page
                window.location.href = 'confirmation.php';
            }, 2000); // 2 seconds delay
        });
    }
});
