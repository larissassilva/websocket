import Echo from 'laravel-echo';
import io from "socket.io-client";
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ":6014",
    client : io
});

// Log connection status
window.Echo.connector.socket.on('connect', () => {
    console.log('Connected to Socket.IO server');
});

window.Echo.connector.socket.on('connect_error', (error) => {
    console.error('Socket.IO connection error:', error);
});

console.log('Bootstrap.js carregado!');

console.log('Echo initialized successfully!');


