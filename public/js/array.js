let newarr = new Array(); //create new empty array
let arr = [3, 8, 9, 2, 2, 4, 1, 19];
function sorting() {
  arr.sort((a, b) => a - b); //return sorted array in ascending order
}

console.log("after sorting the arrey");

arr.pop(); //remove the last element
console.log("after popping the element");
console.log(arr);
arr.push(75, 893); //add element t last position
console.log("after pushing the element");
console.log(arr);
arr.shift(); //remove first element
console.log("after shifting the element");
console.log(arr);
arr.unshift(37); //add element at first index
console.log("after unshifting the element");
console.log(arr);
console.log("after sorting the element");
console.log(arr);
sorting();
let x = arr.slice(0, 4); //give subarray between index 0 and 3
console.log(arr);
console.log("slice elemnt");
console.log(x);
x.splice(1, 2); //remove one element of index 1, first argument is index and last argument is number of element
console.log("after removing the element");
console.log(x);
let y = x.join("@");
console.log(y); //join the elemnt with the specified character,default is ,
let max = arr.find((el) => el == 100); //find the specified elemnt if exist
console.log(max);
const filter = arr.filter((e) => e == 75); //filter the array elemet and return a new array
console.log("filter elemnt");
console.log(filter);
let arr2 = [100, 101, 302];
console.log("after concatination");
let concat = arr.concat(arr2); //concat first array with second array
console.log(concat);
let array_index = arr.indexOf(75); //find index of given element if present if not return -1
console.log("indfex of 7 ");
console.log(array_index);
console.log("individual array element");
arr.forEach((ele) => {
  //iterate through the array element and return individueal array element
  console.log(ele);
});
let includes = arr.includes(75); //return true if given elemnt is present withing array
console.log(includes);
console.log("after map");
arr.map((e, i) => {
  //return a new array of given array element
  console.log("index" + i + "=>" + e);
});
console.log("some method");
let z = arr.some((e) => {
  //method checks whether at least one element in an array satisfies a specified condition
  return e % 10 == 0;
});
console.log(z);
let obj = Object.assign({}, arr); //return array as a key value pair
console.log(obj);
const i = arr.reduce((a, b) => ({ ...a, [b]: b }), {}); //return array as a key value pair
console.log(i);
let string = arr.toString(); //return array as a string
console.log(string);
let json = [
  {
    name: "jhon",
    address: "USA",
    phone: "`+1233333",
  },
  {
    name: "Mikky",
    address: "Canada",
    phone: "`+1233333",
  },
];
json.map((ele, i) => {
  console.log(ele.name);
});
