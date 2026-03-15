const input = document.getElementById("input");
const totalCost = document.getElementById("total-cost");

function priceCalculate() {
  if (input.value < 0) {
    alert("Number of units cannot be negative.");
    input.value = "";
    totalCost.value = "";
    return;
  }
  const units = input.value;
  const cost = units * 10;
  totalCost.value = cost;
  if (cost > 1000) {
    alert("Congrats !! You are eligible for a Gift Coupon");
  }
}
