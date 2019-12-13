Input = {"w":false,"a":false,"s":false,"d":false,"ArrowUp":false,"ArrowLeft":false,"ArrowDown":false,"ArrowRight":false};
userInfo={};
let noob= new Player(25,25,10 ,10,"red");
userInfo={x:noob.x,y:noob.y,w:noob.w,h:noob.h,xp:noob.xp,yp:noob.yp};

let scrolX=window.innerWidth/2,scrolY=window.innerHeight/2;
let pressed =false;
animated();

function animated() {requestAnimationFrame(animated);noob.update();}

function Player(x,y,w,h,c) {
    this.x = x;this.y = y;
    this.w = w;this.h = h;
    this.xa = 0;this.ya = 0;
    this.xp = 0;this.yp = 0;this.c =c;
    this.update = function() {
      ct.clearRect(this.x,this.y, this.w, this.h);
      this.xp=this.x;this.yp=this.y;
      PlayerControl(this);
      PlayerBoxCol(this);
      DrawPlayer(this);
      userInfo={x:this.x,y:this.y,w:this.w,h:this.h,xp:this.xp,yp:this.yp};
      for (x in Input) {
        if (Input[x]) {socket.emit('write',JSON.stringify(userInfo,null,2));}}
    }}

function DrawPlayer(Ps) {
  ct.clearRect(Ps.xp,Ps.yp, Ps.w, Ps.h);
  ct.fillStyle = Ps.c;
  ct.fillRect(Ps.x,Ps.y, Ps.w, Ps.h);
  ct.fill();}

function PlayerBoxCol(Ps) {
  Ps.x=Ps.xa;
  for(i=0;i<Obstacles.length;i++){
  if (Ps.x < Obstacles[i].x + Obstacles[i].w && Ps.x + Ps.w > Obstacles[i].x && Ps.y < Obstacles[i].y + Obstacles[i].h && Ps.h + Ps.y > Obstacles[i].y)
  {Ps.x=Ps.xp;Ps.xa=Ps.xp;break;} }
  Ps.y=Ps.ya;
  for(i=0;i<Obstacles.length;i++){
  if (Ps.x < Obstacles[i].x + Obstacles[i].w && Ps.x + Ps.w > Obstacles[i].x && Ps.y < Obstacles[i].y + Obstacles[i].h && Ps.h + Ps.y > Obstacles[i].y)
  { Ps.y=Ps.yp;Ps.ya=Ps.yp;break;}}

  }

function PlayerPixelCol(Ps) {
  img =ct.getImageData(Ps.x,Ps.y, Ps.w, Ps.h);
  for (var i = 0; i < img.data.length; i += 4) {
    if (img.data[i+1]==150) { Ps.x=Ps.xp;Ps.y=Ps.yp;break;}}}

function PlayerControl(Ps) {
  if (Input['w']) { Ps.ya -= 4;}else if (Input['ArrowUp']) { Ps.y -= 4;}
  if (Input['a']) { Ps.xa -= 4;}else if (Input['ArrowLeft']) { Ps.x -= 4;}
  if (Input['s']) { Ps.ya += 4;}else if (Input['ArrowDown']) { Ps.y += 4;}
  if (Input['d']) {Ps.xa += 4;}else if (Input['ArrowRight']) {Ps.x += 4;}}

socket.on('read',(msg)=>{	DrawPlayer(JSON.parse(msg));})
window.addEventListener( "keydown", keyPressedDown, true);
window.addEventListener( "keyup", keyPressedUp, true);
function keyPressedDown(event) {Input[event.key] = true;}
function keyPressedUp(event) {Input[event.key] = false;}
canvas.addEventListener('contextmenu', e => {  e.preventDefault();});

//window.scrollTo(noob.x-scrolX , noob.y-scrolY );
      // time++;
      //   thisTime = Date.now();
      // if (time>10) {
      //   fps.innerHTML =Math.floor(1/(thisTime - lastTime)* 1000);
      // time =0
      // }
      //   lastTime = thisTime;


        // fps = 1.0 / deltaTime * 1000;
        // console.log(deltaTime);

        //     function fullscreen(){
        //       if(canvas.webkitRequestFullScreen) {canvas.webkitRequestFullScreen();}
        //       else {canvas.mozRequestFullScreen();}}
        //
        // canvas.addEventListener("click",fullscreen);
