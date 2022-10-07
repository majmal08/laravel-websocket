import convert from "lodash/fp/convert";

window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import Echo from "laravel-echo"

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'anyKey',
    wsHost: "websocket.ovadadme.org",
    wssHost: "websocket.ovadadme.org",
    wsPort: "6002",
    wssPort: "6002",
    forceTLS: true,
    disableStats: true,
    enabledTransports: ['ws', 'wss']

});


window.Echo.channel('DemoChannel')
.listen('webSocketDemoEvent', (e) => {
    alert('socket here');
})
