// Patterns

// Numbers only
let numbers = /^[0-9]*$/;
// or
let numbers = /^\d*$/;

// 10 digits mobile number (only numbers)
let mobile = /^[0-9]{10}$/;
// or
let mobile = /^\d{10}$/;

// Alphabets only small letters
let Alphabet = /^[a-z]*$/;

// Alphabets only capital letters
let Alphabet = /^[A-Z]*$/;

// Alphabets only capital and small letters
let Alphabet = /^[a-zA-Z]*$/;

// Alphanumeric only with capital and small letters
let Alphabet = /^[\da-zA-Z]*$/;
// or
let Alphabet = /^[0-9a-zA-Z]*$/;
