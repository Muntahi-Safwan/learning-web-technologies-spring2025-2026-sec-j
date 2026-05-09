const game = document.getElementById("game");
game.style.display = "flex";
game.style.flexDirection = "column";
game.style.alignItems = "center";
game.style.justifyContent = "center";
game.style.margin = "20px";
game.style.height = "90vh";
let currentPlayer = "X";
let gameActive = true;
let boardState = ["", "", "", "", "", "", "", "", ""];

const status = document.createElement("h2");
status.style.color = "navy";
status.appendChild(document.createTextNode("Player X Turn"));
game.appendChild(status);

const board = document.createElement("div");
board.style.display = "grid";
board.style.gridTemplateColumns = "repeat(3, 100px)";
board.style.gap = "5px";
board.style.margin = "20px";

game.appendChild(board);

for (let i = 0; i < 9; i++) {
  let cell = document.createElement("div");
  cell.style.width = "100px";
  cell.style.height = "100px";
  cell.style.border = "2px solid gray";
  cell.style.backgroundColor = "aliceblue";
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

    win();
  });

  board.appendChild(cell);
}

const resetBtn = document.createElement("button");
resetBtn.appendChild(document.createTextNode("Reset Game"));
resetBtn.style.padding = "10px 20px";
resetBtn.style.fontSize = "16px";
resetBtn.style.backgroundColor = "lightblue";
resetBtn.style.border = "1px solid gray";
resetBtn.style.cursor = "pointer";

resetBtn.addEventListener("click", () => {
  boardState = ["", "", "", "", "", "", "", "", ""];

  currentPlayer = "X";

  gameActive = true;

  status.textContent = "Player X Turn";

  let cells = board.children;

  for (let cell of cells) {
    cell.textContent = "";
    cell.style.backgroundColor = "aliceblue";
  }
});

game.appendChild(resetBtn);

const win = () => {
  let won = false;
  let cells = board.children;

  for (let r = 0; r < 3; r++) {
    let i = r * 3;
    if (
      boardState[i] !== "" &&
      boardState[i] === boardState[i + 1] &&
      boardState[i + 1] === boardState[i + 2]
    ) {
      cells[i].style.backgroundColor = "lightblue";
      cells[i + 1].style.backgroundColor = "lightblue";
      cells[i + 2].style.backgroundColor = "lightblue";
      won = true;
      break;
    }
  }

  // column
  if (!won) {
    for (let c = 0; c < 3; c++) {
      if (
        boardState[c] !== "" &&
        boardState[c] === boardState[c + 3] &&
        boardState[c + 3] === boardState[c + 6]
      ) {
        cells[c].style.backgroundColor = "lightblue";
        cells[c + 3].style.backgroundColor = "lightblue";
        cells[c + 6].style.backgroundColor = "lightblue";
        won = true;
        break;
      }
    }
  }

  // diagonal
  if (!won) {
    if (
      boardState[0] !== "" &&
      boardState[0] === boardState[4] &&
      boardState[4] === boardState[8]
    ) {
      cells[0].style.backgroundColor = "lightblue";
      cells[4].style.backgroundColor = "lightblue";
      cells[8].style.backgroundColor = "lightblue";
      won = true;
    } else if (
      boardState[2] !== "" &&
      boardState[2] === boardState[4] &&
      boardState[4] === boardState[6]
    ) {
      cells[2].style.backgroundColor = "lightblue";
      cells[4].style.backgroundColor = "lightblue";
      cells[6].style.backgroundColor = "lightblue";
      won = true;
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
};
