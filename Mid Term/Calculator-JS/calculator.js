let display = document.createElement("input");
display.type = "text";
display.readOnly = true;
display.style.width = "200px";
display.style.textAlign = "right";
display.style.height = "40px";
display.style.borderRadius = "6px";
display.style.padding = "4px";
display.style.fontSize = "16px";

document.body.appendChild(display);

let buttons = [
  "7",
  "8",
  "9",
  "+",
  "4",
  "5",
  "6",
  "-",
  "1",
  "2",
  "3",
  "*",
  "0",
  "C",
  "%",
  "/",
  "=",
];

let currentInput = "";
let operator = null;
let result = null;

// Operations
const add = (a, b) => a + b;
const subtract = (a, b) => a - b;
const multiply = (a, b) => a * b;
const divide = (a, b) => a / b;
const percentage = (a, b) => (a * b) / 100;
const operators = ["+", "-", "*", "/", "%"];

const calculate = (exp) => {
  let numbers = [];
  let ops = [];
  let num = "";
  for (let char of exp) {
    if (operators.includes(char)) {
      numbers.push(parseFloat(num));
      ops.push(char);
      num = "";
    } else {
      num += char;
    }
  }

  numbers.push(parseFloat(num));

  let result = numbers[0];

  for (let i = 0; i < ops.length; i++) {
    let b = numbers[i + 1];
    let op = ops[i];
    if (op == "+") {
      result = add(result, b);
    } else if (op == "-") {
      result = subtract(result, b);
    } else if (op == "*") {
      result = multiply(result, b);
    } else if (op == "/") {
      result = divide(result, b);
    } else if (op == "%") {
      result = percentage(result, b);
    }
  }

  if (isNaN(result)) {
    result = "Invalid Input";
  }

  return result;
};

buttons.forEach((value) => {
  let btn = document.createElement("button");
  btn.innerText = value;
  btn.style.width = "50px";
  btn.style.height = "40px";
  btn.style.borderRadius = "6px";
  btn.style.fontSize = "16px";
  btn.style.margin = "2px";

  btn.addEventListener("click", () => {
    if (value === "C") {
      display.value = "";
    } else if (value === "=") {
      display.value = calculate(display.value);
    } else {
      display.value += value;
    }
  });
  document.body.appendChild(btn);
});
