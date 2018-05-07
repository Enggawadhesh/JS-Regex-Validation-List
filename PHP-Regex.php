<?php
// RegEx Patterns

// get all white space
$allwhitespace = "/(\s+)/ug";

// Numbers only
$numbersregex = "/^[0-9]*$/";
// or
$numbersregex = "/^\d*$/";

// 10 digits mobile number (only numbers)
// You can change length
$mobileregex = "/^\d{10}$/";

// Alphabets only small letters
$smAlphabetregex = "/^[a-z]*$/";

// Alphabets only capital letters
$capAlphabetregex = "/^[A-Z]*$/";

// Alphabets only capital and small letters
$scAlphabetregex = "/^[a-zA-Z]*$/";

// Alphanumeric only with capital and small letters
$numAlphabetregex = "/^[\da-zA-Z]*$/";

// Username alphanumeric with '_' and 4-8 chars
// You can edit username length by changing number 4(min) & 8(max)
$usernameregex = "/^([a-zA-Z\d_]){4,8}$/";

// or (i- case insensitive)
$iUsernameregex = "/^([a-z\d_]){4,8}$/i";

// Full Name (with first & last name)
$fullnameregex = "/^[a-zA-z]{2,20}[ ][a-zA-z]{3,20}$/i";

// Full Name (with first & middle & last name)
$fullmnameregex = "/^[a-zA-z]{3,}[ ][a-zA-z]{3,}[ ][a-zA-z]{3,}$/i";

// Full Name (middle name optional)
$middlenameregex = "/^[a-zA-z]{3,}[ ][a-zA-z]{3,}([ ][a-zA-z]{3,})?$/i";

// Normal Email 
$emailregex = "/^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/";

// Standard Email
$semailregex = "/^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,12})(\.[a-z]{2,12}){0,1}?$/";

// Web URL
// Ex. example.com or example.co.in, www.example.com, http://example.com, http://www.example.com
$urlregex = "/^(http[s]?:\/\/)?(www\.)?[a-zA-Z0-9]+([-]?\w+)\.([a-z]{2,12})(\.[a-z]{2,12})?$/";
