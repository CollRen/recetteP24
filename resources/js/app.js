import './bootstrap';
import '../../node_modules/flowbite/dist/flowbite.min.js';
// import './echo.js';

// Compiler toutes les images, polices, etc. pour rendre accessible dans une view
import.meta.glob(["../img/**", "../fonts/**"])


// Ou importer chaque image individuellement

// Create an event listener that will send a POST request to the
// server when the user clicks the button.
document.querySelector('#submit-button').addEventListener(
    'click',
    () => window.axios.post('/button/clicked')
);

// Subscribe to the public channel called "public-channel"
window.Echo.channel('public-channel')

    // Listen for the event called "button.clicked"
    .listen('.button.clicked', (e) => {
        
        // Display the "message" in an alert box
        alert(e.message);
    });