let display = document.createElement("input");
display.type = "text";
display.readOnly = true;

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
  "/",
  "=",
];

buttons.forEach((value) => {
  let btn = document.createElement("button");
  btn.innerText = value;

  btn.addEventListener("click", () => {
    if (value == "C") {
      display.value = "";
      return;
    } else if (value == "=") {
      try {
        display.value = eval(display.value);
      } catch (e) {
        display.value = "Error";
      }
    } else {
      display.value += value;
    }
  });
  document.body.appendChild(btn);
});
