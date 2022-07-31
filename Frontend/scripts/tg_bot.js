var name, email, message
function reader() {
    // getting user information from the form
    name = document.forms["ContactForm"]["name"].value;
    email = document.forms["ContactForm"]["email"].value;
    message = document.forms["ContactForm"]["message"].value;
    var flag = 1
    let regex = /([a-zA-Z])$/;
    if (regex.test(name) == false) {
        flag = 0;
    }

    regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    if (regex.test(email) == false) {
        flag = 0;
        console.log(flag)
    }

    if (flag == 1) {
        message = "Name: " + name + " Email: " + email + " Message: " + message;
        var url = "https://api.telegram.org/bot5545820465:AAGKlQzClJizLEBqgCieXq1pqdY7E1uc_So/sendMessage?chat_id=-715500362&text=" + message
        var request = new XMLHttpRequest();
        request.open("POST", url, false);
        request.send(null);
    }
    console.log(message)
    document.forms["ContactForm"].submit()
}