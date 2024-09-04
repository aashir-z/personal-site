// js/scripts.js
// Navigation
document.addEventListener('DOMContentLoaded', function() {
    // Function to load navigation
    function loadNavigation() {
        fetch('nav.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('nav-placeholder').innerHTML = data;
            });
    }

    // Call the function to load navigation
    loadNavigation();
});
