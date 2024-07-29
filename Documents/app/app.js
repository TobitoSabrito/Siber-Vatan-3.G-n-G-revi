document.addEventListener('DOMContentLoaded', function() {
    loadMessage();
});

function loadMessage() {
    fetch('backend.php')
    .then(response => response.text()) 
    .then(data => {
        const messageContainer = document.getElementById('message-container');
        messageContainer.innerText = data; 
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while loading messages.');
    });
}
