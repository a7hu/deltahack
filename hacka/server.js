fs = require('fs')
fs.readFile('C:/Users/Danielle/Documents/Visual Studio 2013/Projects/nymihack/nymihack/example.txt', 'utf8', function (err,data) {
  if (err) {
    return console.log(err);
  }
  console.log(data);

  var http = require('http');
  http.createServer(function (req, res) {
  	res.writeHead(200, {'Content-Type': 'text/plain'});
  	//mydata = data;
  	res.end(data);
  }).listen(1337, '127.0.0.1');
console.log('Server running at http://127.0.0.1:1337/');
});

