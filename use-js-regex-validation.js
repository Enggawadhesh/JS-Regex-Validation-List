// How to use RegEx Patterns for validation

// ----- Use in single file -----

var emailregex = /^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/;
var emailval   = 'yourname@example.com';

	if(emailval.match(emailregex)) {
		// your success message
	} else {
		// your error message
	}

// or

	if(emailregex.test(emailval)){
        // your success message
	} else {
		// your error message
	}


// ----- Global use -----

// Your input like as
// <input type="text" name="username" />
// <input type="email" name="emailid" />

var inputs = document.querySelectorAll('input');

// regex patterns
var patterns = {
    username: /^([a-zA-Z\d_]){4,8}$/,
    emailid: /^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/
    // you can add many regex here
};

// Validation function
function validate(fieldName, regex){

    if(regex.test(fieldName.value)){
        // your success message
    } else {
        // your error message
    }

}

// Attach keyup events to inputs
inputs.forEach((input) => {
    input.addEventListener('keyup', (e) => {
        validate(e.target, patterns[e.target.attributes.name.value]);
        // console.log(patterns[e.target.attributes.name.value]);
    });
});