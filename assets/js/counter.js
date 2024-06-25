document.addEventListener('DOMContentLoaded', function() {
    // Check if the counter is already stored in local storage
    let counter = localStorage.getItem('visitorCounter') || 0;

    // Update the counter display
    document.getElementById('counter').innerText = counter;

    // Increment the counter when the user enters the site
    counter++;
    
    // Update the counter in local storage
    localStorage.setItem('visitorCounter', counter);
});
