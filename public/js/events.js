function clickEvent() {
  console.log("click event");
  alert("you clicked  the button");
}
function changeContent() {
  let p1 = document.getElementById("p1");
  p1.innerHTML = "you clicked the button to change content";
}
function hoverEvent() {
  alert("you hover the button");
}
function mouseOutEvent() {
  alert("mouse out the button");
}

function oneChangeEvent(value) {
  console.log("one change event");
  console.log("name :", value);
}
function onKeyupEvent(value) {
  console.log(value);
  let nameHolder = document.getElementById("nameholder");
  nameHolder.innerHTML = value;
}
