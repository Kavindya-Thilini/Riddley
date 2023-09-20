let img = document.getElementById("question");
let btn = document.getElementById('btnClick');
const questionCounterText = document.getElementById("questionCounter");
const scoreText = document.getElementById("score");



async function myFunction(){
    
let response = await fetch("https://marcconrad.com/uob/smile/api.php");
let jsonData = await response.json();
console.log(jsonData);
}
