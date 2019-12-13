
let express = require('express');
let app = express();
// var fs = require('fs');
let server = require('http').Server(app);
let io = require('socket.io')(server);
// let array;

//fs.readFile('test.json',read);//zet file in array
io.on('connection',(socket)=>{
  console.log('Player Connected: ' +socket.id);
//socket.emit('read',array);// stuur array 1 keer na zich zelf
  socket.on('write',(msg)=>{//listen from users
  //fs.writeFile('test.json', msg.toString(),write);
  //fs.readFile('test.json',read);
  socket.broadcast.emit('read',msg);// send to users to read
});})

app.use(express.static(__dirname));

server.listen(4649,()=>{console.log('listen to port yoroshiku');});
// function write(err, data) { if (err) throw err;}//console.log('write! file');}
// function read(err, data) { if (err)throw err;array = data.toString();}//console.log('read! file');}
