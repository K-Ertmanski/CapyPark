// Function to toggle dark mode
function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle('dark-mode'); // Toggle dark-mode class on the body

    // Update dark mode preference in local storage
    const isDark = body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDark);
}

// Apply dark mode when the page loads based on the stored preference
window.addEventListener('DOMContentLoaded', () => {
    const isDarkMode = localStorage.getItem('darkMode') === 'true';

    if (isDarkMode) {
        document.body.classList.add('dark-mode');
    }

    // Event listener for the toggle button
    const toggleBtn = document.getElementById('toggleBtn');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', toggleDarkMode);
    }
});