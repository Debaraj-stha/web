function add(x, y) {
  return x + y;
}
function subtract(x, y) {
  let diff = x - y;
  console.log(`difference of ${x} and ${y} is ${diff}`);
}
let x = 20;
let y = 10;
let sum = add(x, y);
console.log("sum=" + sum);
subtract(x, y);

function checkGreatest(x, y) {
  if (x < y) {
    return true;
  }
  return false;
}
let check = checkGreatest(x, y);
console.log(check);
function generateRandomNumber(length) {
  let ran = Math.floor(Math.random() * 999999 + 100000);
  //math.floor return maximum integer number  less than or equal to number
  //math.rardom generate a random number between 0 and 1
  //math.random()*999999 gives a random floatring point number between 0 and 999999 and 999999 is not encluded and we add 100000 to make our random number between 100000 to 999999

  return ran;
}
let randomNumber = generateRandomNumber(5);
console.log(randomNumber);
