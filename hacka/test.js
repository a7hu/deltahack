fs = require('fs')
    fs.readFile('C:/Users/Danielle/Documents/Visual Studio 2013/Projects/nymihack/nymihack/example.txt', 'utf8', function (err,data) {
    if (err) {
        return console.log(err);
    }
    console.log(data);
    var userData = data;
var WebSocketServer = require('websocket').server;
var http = require('http');

var server = http.createServer(function(request, response) {
    // process HTTP request. Since we're writing just WebSockets server
    // we don't have to implement anything.
});
server.listen(1337, function() {});

// create the server
wsServer = new WebSocketServer({
    httpServer: server
});

// WebSocket server
wsServer.on('request', function(request) {
    var connection = request.accept(null, request.origin);
    
    // This is the most important callback for us, we'll handle
    // all messages from users here.
    connection.on('message', function(message) {
        if (message.type === 'utf8') {
            connection.sendUTF(JSON.stringify({ type:'info', data: userData }));
        }
    });

    connection.on('close', function(connection) {
        // close user connection
    });
});

});