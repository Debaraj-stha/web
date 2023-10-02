let str = "Hello World     there";
let split = str.split("o"); //break the string array  where the specidied lettter is found and remove the found letter
console.log(split);
let indexFirst = str.lastIndexOf("o"); //return the last index of the given element if present  else return -1
console.log(indexFirst);
console.log(str.toUpperCase()); //transform the string to uppercase
console.log(str.toLowerCase()); //transform the string to lowercase
console.log(str.charAt(2)); //return the character present at given index
console.log(str.concat(" gusy")); //concat the first string with the second string
console.log(str.substring(0, 4)); //return the charcacter between index 0 and 3
console.log(str.replace("World", "there")); //replace the first string with the second string of given string
console.log(str.charCodeAt(0)); //return ASCII code of given character
