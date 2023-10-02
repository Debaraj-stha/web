let obj = {
  name: "x",
  address: "xyz",
};
let newObject = new Object(); //we can also create by using {}
console.log(obj.name); //access object field
console.log(obj["address"]); //another way to access object field
obj.age = 1; //add field to object
console.log(obj);
delete obj.address; //delete field from object
console.log(obj);
const entry = Object.entries(obj); //return array of key and value pair
console.log("object entries");
console.log(entry);
const key = Object.keys(obj); //return array of keys of object
console.log("object keys");
console.log(key);
const value = Object.values(obj); //return array of values of object
console.log("object values");
console.log(value);
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
  console.log("name " + ele.name + " address " + ele.address);
});
