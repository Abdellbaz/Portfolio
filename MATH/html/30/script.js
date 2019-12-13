const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let midX = canvas.width/2;
let midY = canvas.height/2;

let planets = []
let numOfPlanets = 8
let sun = {};

function setup(){
  sun.pos = new Vector2d(midX,midY)
  sun.point = new Point(sun.pos.dx,sun.pos.dy,20,"RED")
  animate();

  for(let i=0; i<numOfPlanets;i++){
    let planet = {};
    planet.pos = new Vector2d();
    planet.point = new Point(planet.pos.dx,planet.pos.dy,getRandomNumber(5,10),"gold");
    planet.distance = 80 + i*30;
    planet.dAngle = 1/planet.distance;
    planet.relPos = new Vector2d(getRandomNumber(-5,5),getRandomNumber(-5,5));
    planets.push(planet);}
}

function animate(){
  requestAnimationFrame(animate)
  context.clearRect(0,0,canvas.width,canvas.height);
  sun.point.draw(context);
   drawArc();
 BallMovement();
}
  function drawArc() {
    context.strokeStyle = "rgba(255,255,255,0.5)";
    for(let i=0;i<planets.length;i++){
    context.beginPath();
    context.arc(sun.point.x,sun.point.y,planets[i].distance,0,Math.PI*2);
    context.closePath();
    context.stroke();}}

  function BallMovement() {
    for(let i =0; i<planets.length;i++){
      planets[i].relPos.magnitude = planets[i].distance;
      planets[i].relPos.angle += planets[i].dAngle;
      planets[i].pos.sumVector(sun.pos,planets[i].relPos)
      planets[i].point.position(planets[i].pos);
      planets[i].point.draw(context);}}
      function getRandomNumber(min,max){
        return Math.floor(Math.random()*(max-min) + min);
      }
setup();
