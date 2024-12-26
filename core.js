// Initialize Agora.io Client
const client = AgoraRTC.createClient({ mode: 'rtc', codec: 'vp8' });

// Join channel
client.join('YOUR_APP_ID', 'YOUR_CHANNEL_NAME', null, (uid) => {
    console.log('Joined channel with uid: ' uid);
}, (err) => {
    console.error('Error joining channel: ' err);
});

// Add event listeners for engine events
client.on('stream-added', (evt) => {
    console.log('Stream added: ' evt.stream);
});

client.on('stream-removed', (evt) => {
    console.log('Stream removed: ' evt.stream);
});

client.on('peer-leave', (evt) => {
    console.log('Peer left: ' evt.uid);
});