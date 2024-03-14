let userScore = 0;
let compSore = 0;

const choices = document.querySelectorAll(".choice");
const msg = document.querySelector("#msg");
let userscorePara = document.querySelector("#user-score");
let compscorePara = document.querySelector("#comp-score");

const genCompChoice = () => {
  const option = ["rock","paper","scissor"];
  const randIdx = Math.floor(Math.random()*3);
  return option[randIdx];
}

const drawGame = () =>{
  msg.innerText = "Game Was Drawn Play Again";
  msg.style.backgroundColor = "#081b31";
}

const showWinner = (userWin,userChoice,compchoice) =>{
  if(userWin){
    
    msg.innerText = `You win! Yours ${userChoice} beats ${compchoice}`;
    msg.style.backgroundColor = "green";
    userScore++;
    userscorePara.innerText = userScore;

  }else{
    
    msg.innerText = `You lose! ${compchoice} beats Yours ${userChoice}`;
    msg.style.backgroundColor = "Red";
    compSore++;
    compscorePara.innerText = compSore;
  }
}


const playGames =(userChoice) =>{
  console.log("User Choice =",userChoice);
  //generate Computer Choice
  const compchoice = genCompChoice();
  console.log("comp Choice =",compchoice);

if(userChoice === compchoice){
  //Draw Game
 drawGame();
}else{
  let userWin = true;
  if(userChoice === "rock"){
    userWin = compchoice === "paper" ? false : true;
  }else if(userChoice === "paper"){
    userWin = compchoice === "scissor" ? false : true;
  }else{
    userWin = compchoice === "rock" ? false : true;  
  }
  showWinner(userWin , userChoice ,compchoice);
}


};

choices.forEach((choice) =>{
  choice.addEventListener("click",() =>{
    const userChoice = choice.getAttribute("id");
    playGames(userChoice);
  });
});