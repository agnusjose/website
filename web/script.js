// JavaScript for enhancing user experience

document.addEventListener('DOMContentLoaded', function() {
    const promoCodeInput = document.getElementById('promo-code');
    const applyButton = document.getElementById('apply-btn');

    if (applyButton) {
        applyButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Simulated logic to apply promo code (example)
            const promoCode = promoCodeInput.value.trim();
            if (promoCode === '') {
                alert('Please enter a promo code.');
                return;
            }

            // Simulated logic to apply promo code (example)
            alert(`Applying promo code: ${promoCode}`);
            promoCodeInput.value = ''; // Clear input field after applying
        });
    }
});


