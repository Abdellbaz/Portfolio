const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let screenW = canvas.width;
let screenH = canvas.height;

let balls = [];
let numBalls = 100;



function setup() {
  for (let i = 0; i < numBalls; i++) {
    let ball = {};
    ball.pos = new Vector2d(screenW/2,screenH/2);
    ball.vel = new Vector2d(grn(1,10),grn(1,10));
    ball.point = new Point(ball.pos.dx, ball.pos.dy, grn(5,15),"#" + Math.floor(grn(0,255*255*255)).toString(16));
    ball.rad = new Vector2d(1, 1);
    ball.tan = new Vector2d();
    ball.acc = new Vector2d();
    balls.push(ball);
  }
  animate();
}

function animate() {
  requestAnimationFrame(animate);

  context.fillRect(0, 0, screenW, screenH);
  for (let i = 0; i < balls.length; i++) {
    box(balls[i]);
    balls[i].pos.add(balls[i].vel);
    balls[i].point.position(balls[i].pos);
    balls[i].point.draw(context);
    for (let j = 0; j < balls.length; j++) {
      if (i != j ) {

        balls[i].rad.diffenceVector(balls[i].pos, balls[j].pos);
        if (balls[i].rad.r < balls[i].point.r + balls[j].point.r) {
          let tempI = balls[i].vel.r;
          let tempJ = balls[j].vel.r;
          balls[i].rad.r = 1;
          balls[i].tan.dx = balls[i].rad.dy;
          balls[i].tan.dy = -balls[i].rad.dx;
          balls[i].rad.r = balls[i].rad.dot(balls[i].vel);
          balls[i].tan.r = balls[i].tan.dot(balls[i].vel);

          balls[j].rad.r = 1;
          balls[j].tan.dx = balls[j].rad.dy;
          balls[j].tan.dy = -balls[j].rad.dx;
          balls[j].rad.r = balls[j].rad.dot(balls[j].vel);
          balls[j].tan.r = balls[j].tan.dot(balls[j].vel);

          balls[i].vel.sumVector(balls[j].rad, balls[i].tan);
          balls[j].vel.sumVector(balls[i].rad, balls[j].tan);

          balls[i].vel.r = tempJ;
          balls[j].vel.r = tempI;


      }

    }
  }

}
}

setup();
//
// function grn(max) {
//   return Math.random() * max;
// }

function box(gameObject) {

  if (gameObject.pos.dx < gameObject.point.r) { gameObject.vel.dx = Math.abs(gameObject.vel.dx);}
  if (gameObject.pos.dx > screenW - gameObject.point.r) { gameObject.vel.dx = -Math.abs(gameObject.vel.dx);}
  if (gameObject.pos.dy < gameObject.point.r) { gameObject.vel.dy = Math.abs(gameObject.vel.dy);}
  if (gameObject.pos.dy > screenH - gameObject.point.r) { gameObject.vel.dy = -Math.abs(gameObject.vel.dy);}

}


function grn(min,max){
  return Math.floor(Math.random()*(max-min) + min);
}
