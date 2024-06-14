import './bootstrap';
import '../../node_modules/flowbite/dist/flowbite.min.js';
import './bootstrap';

// Compiler toutes les images, polices, etc. pour rendre accessible dans une view
import.meta.glob(["../img/**", "../fonts/**"])


// Ou importer chaque image individuellement

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

const token = document.querySelector('[name="_token"]').value;


const echo = new Echo({
    broadcaster: 'pusher',
    key: '6d1cffe82e9e50ca7a10',
    cluster: 'us2',
    forceTLS: true,
    auth: {
        headers: {
            Authorization: 'Bearer ' + token
        }
    },
    namespace: 'App.Events',
    encrypted: true,
});

echo.channel('messages')
    .listen('NewMessage', (e) => {
        console.log(e.message);
    });