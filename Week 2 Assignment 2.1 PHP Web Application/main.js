// main js code
function validateForm(){
    // shortcut to the form
    let frmApp = document.frmApp;
    // div message for form
    let divMsg = document.getElementById("divMsg");
    // keep track of validicatiion
    let isValid = true;
    // users name and trim method to remove extra spaces at beginning and ends that are entered
    let name = frmApp.txtName.value.trim();
    // statement to validate that the name is 5 or more letters
    if(name.length < 5){
        // variable set to boolean and display message if validation isn't met
        isValid = false;
        // set this up so I could get the error message the color I wanted which is the divMsg
        divMsg.className = "error-msg";
        divMsg.innerHTML = "Please Enter in Your Whole First and Last Name of More than 5 Letters"; 

    }
    // if correct pass validaction and if not give error messsage
    return isValid;
}