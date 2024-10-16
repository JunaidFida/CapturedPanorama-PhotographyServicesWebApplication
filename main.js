//contact buttons 
document.addEventListener('DOMContentLoaded', function() {
const textButtons = document.querySelectorAll('.contact__btn');

textButtons.forEach(textButtons => {
    let text = textButtons.querySelector('p');

    text.innerHTML = text.innerHTML.split('').map((character, index) => `<span style="transform: rotate(${index * 12}deg)
    ">${character}</span>`).join('')
 })



// Function to display navigation history in an alert box
function displayNavigationHistory() {
    var navigationHistory = JSON.parse(sessionStorage.getItem('navigationHistory'));
    if (navigationHistory && navigationHistory.length > 0) {
        var message = 'Navigation History:\n';
        navigationHistory.forEach(function(page, index) {
            message += (index + 1) + '. ' + page + '\n';
        });
        alert(message);
    } else {
        alert('No navigation history available.');
    }
}

// Attach click event listener to all anchor tags to track navigation
document.querySelectorAll('a').forEach(function(anchor) {
    anchor.addEventListener('click', function(event) {
        // Retrieve navigation history from session storage
        var navigationHistory = JSON.parse(sessionStorage.getItem('navigationHistory')) || [];
        // Add current page URL to navigation history
        navigationHistory.push(window.location.href);
        // Store updated navigation history in session storage
        sessionStorage.setItem('navigationHistory', JSON.stringify(navigationHistory));
    });
});

// Attach click event listener to body to display navigation history on click
// document.body.addEventListener('click', function(event) {
  // displayNavigationHistory();
 //});
 //const sessionUsername = sessionStorage.getItem('username');

 // Access the sessionUsername variable directly in JavaScript
if(sessionStorage !== null) {
    console.log('Session username:', sessionUsername);
} else {
    console.log('Session username not set.');
}
});