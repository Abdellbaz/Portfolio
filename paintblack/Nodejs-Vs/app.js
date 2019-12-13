
let express = require('express');
let app = express();
var fs = require('fs');
let server = require('http').Server(app);
let io = require('socket.io')(server);
let array;

fs.readFile('test.json',read);
io.on('connection',(socket)=>{
  socket.emit('read',array);
  socket.on('write',(msg)=>{  socket.broadcast.emit('read',msg);
  fs.writeFile('test.json', msg.toString(),write);fs.readFile('test.json',read);});})

app.use(express.static(__dirname));

server.listen(4649,()=>{console.log('listen to port yoroshiku');});
function write(err, data) { if (err) throw err;console.log('write! file');}
function read(err, data) { if (err)throw err;array = data.toString();console.log('read! file');}
