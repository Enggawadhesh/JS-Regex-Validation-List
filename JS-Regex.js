// Patterns

// Numbers only
let numbers = /^[0-9]*$/;
// or
let numbers = /^\d*$/;

// 10 digits mobile number (only numbers)
// You can change length
let mobile = /^\d{10}$/;

// Alphabets only small letters
let Alphabet = /^[a-z]*$/;

// Alphabets only capital letters
let Alphabet = /^[A-Z]*$/;

// Alphabets only capital and small letters
let Alphabet = /^[a-zA-Z]*$/;

// Alphanumeric only with capital and small letters
let Alphabet = /^[\da-zA-Z]*$/;

// Username alphanumeric with '_' and 4-8 chars
// You can edit username length by changing number 4(min) & 8(max)
let username = /^([\da-zA-Z_]){4,8}$/;

// Email 
let email = /^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/;

// Web URL
// Ex. example.com or example.co.in, www.example.com, http://example.com, http://www.example.com
let url = /^(http[s]?:\/\/)?(www\.)?[a-zA-Z0-9]+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/;
