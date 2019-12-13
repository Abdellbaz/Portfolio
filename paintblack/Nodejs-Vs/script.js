var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var colorSelection = 0xf;
var ega = ["#000000", "#0000aa", "#00aa00", "#00aaaa", "#aa0000", "#aa00aa", "#aa5500", "#aaaaaa", "#555555", "#5555ff", "#55ff55", "#55ffff", "#ff5555", "#ff55ff", "#ffff55", "#ffffff"];
var pallet = [];
var drawing= [];
let socket = io();
class Bit {
  constructor(x, y, color) {
    this.x = x;
    this.y = y;
    this.color = color;
    this.colorBit = false;// boolean
    addEventListener('mousedown', (e) => {
      var box = canvas.getBoundingClientRect();
      var mouseX = e.clientX - box.left;
      var mouseY = e.clientY - box.top;
      if (mouseX > this.x && mouseX < this.x + 40 && mouseY > this.y && mouseY < this.y + 40) {
        if (this.colorBit) {
          colorSelection = this.color;
        } else {
          this.color = colorSelection;
          this.draw(context);
          socket.emit('write',JSON.stringify(drawing,null,2));
        }
      }
    })
  }
  draw(context,size) {
    this.size = size || 40;
    context.beginPath();
    context.fillStyle = ega[this.color];
    context.rect(this.x, this.y, this.size , this.size );
    context.stroke();
    context.fill();
    context.closePath();
  }
}

function init() {
  for (var i = 0; i < 0x10; i++) {
    var numOnRow = 1;
    var bitWidth = 50;
    var x = 960 + (i % numOnRow) * bitWidth;
    var y = Math.floor(i / numOnRow) * bitWidth;
    var bit = new Bit(x, y, i);
    bit.colorBit = true;
    bit.draw(context,50);
    pallet.push(bit);
  }

  console.log(pallet)

  for (i = 0; i < 480; i++) {
    var numOnRow = 24;
    var bitWidth = 40;
    var x = (i % numOnRow) * bitWidth;
    var y = Math.floor(i / numOnRow) * bitWidth;
    var bit = new Bit(x, y, 0xf);
    bit.draw(context);
	  drawing[i] = bit;
  }
  console.log(drawing);
}
function readJson(jsonString) {
  jsonObj = JSON.parse(jsonString);
  for (i = 0; i < 480; i++) {
    drawing[i].x = jsonObj[i].x;
    drawing[i].y = jsonObj[i].y;
    drawing[i].color = jsonObj[i].color;
    drawing[i].draw(context);
  }}
init();

socket.on('read',(msg)=>{readJson(msg);})
