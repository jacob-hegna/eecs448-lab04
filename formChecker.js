// Taken from https://stackoverflow.com/questions/7635533/validate-email-address-textbox-using-javascript
// I wasn't sure how to validate emails otherwise
var validateEmail = function(str) {
    var reEmail = /\S+@\S+\.\S+/;

    if(!str.match(reEmail)) {
        return false;
    }

    return true;
}

window.onload = function () {
    document.getElementById("store-form").onsubmit = function(form) {

        // Check for non-negative quantities
        if(document.getElementById("textbook-qnt").value < 0
            || document.getElementById("calculator-qnt").value < 0
            || document.getElementById("notebook-qnt").value < 0)
        {
            alert("Cannot order negative quantities of items!");
            return false;
        }

        // Check for valid email
        if(!validateEmail(document.getElementById("username").value)) {
            alert("Username must be in the form of an email!");
            return false;
        }

        // Check for valid password
        if(!document.getElementById("password").value) {
            alert("Cannot have empty password!");
            return false;
        }

        // there will always be a shipping option selected, due to the html

        return true;
    }
}