document.addEventListener('DOMContentLoaded', function() {
    // Get the form.
    var form = document.getElementById('contact-form');
    // Get the messages div.
    var formMessages = document.querySelector('.form-messege');
    // Set up an event listener for the contact form.
    form.addEventListener('submit', function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        // Serialize the form data.
        var formData = new FormData(form);
        // Submit the form using AJAX.
        var xhr = new XMLHttpRequest();
        xhr.open('POST', form.getAttribute('action'), true);
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Make sure that the formMessages div has the 'success' class.
                formMessages.classList.remove('error');
                formMessages.classList.add('success');
                // Set the message text.
                formMessages.textContent = xhr.responseText;
                // Clear the form.
                form.reset();
            } else {
                // Make sure that the formMessages div has the 'error' class.
                formMessages.classList.remove('success');
                formMessages.classList.add('error');
                // Set the message text.
                if (xhr.responseText !== '') {
                    formMessages.textContent = xhr.responseText;
                } else {
                    formMessages.textContent = 'Oops! An error occurred and your message could not be sent.';
                }
            }
        };
        xhr.send(formData);
    });
});
