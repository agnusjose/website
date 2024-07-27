// JavaScript for form validation

document.addEventListener('DOMContentLoaded', function() {
    const formShipping = document.getElementById('shipping-form');
    const formPayment = document.getElementById('payment-form');

    if (formShipping) {
        formShipping.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Validate shipping form fields (example validation)
            const name = document.getElementById('name').value.trim();
            const address = document.getElementById('address').value.trim();
            const city = document.getElementById('city').value.trim();
            const zip = document.getElementById('zip').value.trim();
            const phone = document.getElementById('phone').value.trim();

            if (name === '' || address === '' || city === '' || zip === '' || phone === '') {
                alert('Please fill in all fields.');
                return;
            }

            // If valid, submit the form
            this.submit();
        });
    }

    if (formPayment) {
        formPayment.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Validate payment form fields (example validation)
            const paymentMethod = document.querySelector('input[name="payment-method"]:checked');
            if (!paymentMethod) {
                alert('Please select a payment method.');
                return;
            }

            // Additional validation for payment details (e.g., credit card)

            // If valid, submit the form
            this.submit();
        });
    }
});

