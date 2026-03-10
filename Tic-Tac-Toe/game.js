const game = document.getElementById("game");
let currentPlayer = "X";
let gameActive = true;
let boardState = ["", "", "", "", "", "", "", "", ""];

// Winning combinations
const winPatterns = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

const status = document.createElement("h2");
status.appendChild(document.createTextNode("Player X Turn"));
game.appendChild(status);

const board = document.createElement("div");
board.style.display = "grid";
board.style.gridTemplateColumns = "repeat(3,100px)";
board.style.gap = "5px";
board.style.margin = "20px";

game.appendChild(board);

for (let i = 0; i < 9; i++) {
  let cell = document.createElement("div");
  cell.style.width = "100px";
  cell.style.height = "100px";
  cell.style.border = "2px solid black";
  cell.style.display = "flex";
  cell.style.alignItems = "center";
  cell.style.justifyContent = "center";
  cell.style.fontSize = "40px";
  cell.style.cursor = "pointer";

  cell.addEventListener("click", () => {
    if (boardState[i] !== "" || !gameActive) {
      return;
    }

    boardState[i] = currentPlayer;

    cell.textContent = currentPlayer;

    checkWinner();
  });

  board.appendChild(cell);
}

const resetBtn = document.createElement("button");
resetBtn.appendChild(document.createTextNode("Reset Game"));
resetBtn.style.padding = "10px";
resetBtn.style.fontSize = "16px";

resetBtn.addEventListener("click", () => {
  boardState = ["", "", "", "", "", "", "", "", ""];

  currentPlayer = "X";

  gameActive = true;

  status.textContent = "Player X Turn";

  let cells = board.children;

  for (let cell of cells) {
    cell.textContent = "";
    cell.style.backgroundColor = "white";
  }
});

game.appendChild(resetBtn);

function checkWinner() {
  let won = false;

  for (let pattern of winPatterns) {
    let a = boardState[pattern[0]];
    let b = boardState[pattern[1]];
    let c = boardState[pattern[2]];

    if (a === "" || b === "" || c === "") continue;

    if (a === b && b === c) {
      let cells = board.children;

      for (let i of pattern) {
        cells[i].style.backgroundColor = "lightgreen";
      }
      won = true;

      break;
    }
  }

  if (won) {
    status.textContent = "Player " + currentPlayer + " Wins!";
    gameActive = false;
    return;
  }

  if (!boardState.includes("")) {
    status.textContent = "Draw!";
    gameActive = false;
    return;
  }

  currentPlayer = currentPlayer === "X" ? "O" : "X";

  status.textContent = "Player " + currentPlayer + " Turn";
}
