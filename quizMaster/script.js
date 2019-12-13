const questionBox = document.getElementById('questionBox');
const myQuestion = document.getElementById('myQuestion');
const answerBox = document.getElementById('answerBox');
const resultBox = document.getElementById('resultBox');
const start = document.getElementById('start');


function makeQuestion(){
myQuestion.innerHTML = quiz[counter].question;
answerBox.innerHTML ='';
for (let i in  quiz[counter].answers) {answerBox.innerHTML += '<li>'+quiz[counter].answers[i].answer+'</li>';}
click=true;}




function finishQuiz() {
  let  text = "";t=0;
  for (let i in Table) {
    if (x==true) {
    switch (t) {
      case 0:t=1; text = "<tr  bgcolor='Green'><td>"+Table[i]+"</td>";break;
      case 1:t=2; text += "<td>"+Table[i]+"</td>";break;
      case 2:t=0; text += "<td>"+Table[i]+"</td><tr>";break;
      default:break;}}else {
        switch (t) {
          case 0:t=1; text = "<tr  bgcolor='Red'><td>"+Table[i]+"</td>";break;
          case 1:t=2; text += "<td>"+Table[i]+"</td>";break;
          case 2:t=0; text += "<td>"+Table[i]+"</td><tr>";break;
          default:break;}
      }
    }

  resultBox.innerHTML += text;}
function pushTable() {Table.push(quiz[counter].question);Table.push(quiz[counter].answers[antwoord].answer);Table.push(quiz[counter].answers[beantwoord].answer);}






answerBox.onclick = function(event) {

var target = event.target;
switch (true) {
  case quiz[counter].answers[0].feedback:antwoord=0;break;
  case quiz[counter].answers[1].feedback:antwoord=1;break;
  case quiz[counter].answers[2].feedback:antwoord=2;break;
  case quiz[counter].answers[3].feedback:antwoord=3;break;
  default:break;}
  switch (target.innerHTML) {
    case quiz[counter].answers[0].answer:beantwoord=0;break;
    case quiz[counter].answers[1].answer:beantwoord=1;break;
    case quiz[counter].answers[2].answer:beantwoord=2;break;
    case quiz[counter].answers[3].answer:beantwoord=3;break;
    default:break;}
    if (click==true) {
console.log(quiz[counter].question);
console.log(quiz[counter].answers[antwoord].answer);
console.log(target.innerHTML);
x=quiz[counter].answers[beantwoord].feedback;
console.log(x);
console.log(quiz.length);


if (quiz[counter].answers[beantwoord].feedback) {target.style.backgroundColor = "green"; sound.src ='win.mp3'; }else {target.style.backgroundColor = "red"; sound.src ='lose.mp3'; }
 sound.play();
pushTable();

if (counter<quiz.length-1) {counter++;window.setTimeout(makeQuestion,2000);}
finishQuiz();
click=false;
}};


let counter = 0;
let click = false;
let x;
let Table=[];


function run() {
  sound = new Audio();
  counter =0;
  table =[];
  start.innerHTML= "Reset";
  resultBox.innerHTML = "<tr><th> Vraag </th><th> Antwoord </th><th> Beantwoord </th></tr>";
      makeQuestion();

}


  start.addEventListener('click',()=>{run();})
