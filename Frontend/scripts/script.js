var x = window.matchMedia("(max-width: 1199px)")
function MobileView() {
    if (x.matches) { // If media query matches
        window.location.href = "Frontend/Pages/mobile_warning.html";
    }
}

// Front Page
function login_redirect() {
    window.location.href = "Frontend/Pages/login.html"
}

function pass_login_redirect() {
    window.location.href = "login.html"
}

// Login Page
function logout() {
    window.location.href = "login.html";
}
// Admin Functions
function admin_functions(page) {
    switch (page) {
        case 'doctor_view':
            window.location.href = "doctor_table.php";
            break;
        case 'doctor_add':
            window.location.href = "doctor_form.html";
            break;
        case 'doctor_leave_req':
            window.location.href = "doctor_leave_req_view.php";
            break;
        case 'nurse_view':
            window.location.href = "nurse_table.php";
            break;
        case 'nurse_add':
            window.location.href = "nurse_form.html";
            break;
        case 'room_add':
            window.location.href = "room_form.html";
            break;
        case 'room_view':
            window.location.href = "room_table.php";
            break;
        case 'ward_add':
            window.location.href = "wardboy_form.html";
            break;
        case 'ward_view':
            window.location.href = "ward_boy_table.php";
            break;
        case 'patient':
            window.location.href = "patient_table.php";
            break;
    }
}

function admin_panel() {
    window.location.href = "admin_panel.html"
}

// Doctor Functions
function doctor_functions(page) {
    switch (page) {
        case 'view':
            var url = window.location.href;
            var url_length = url.length;
            var temp = "", i = 1, id = "";
            while (temp != '=') {
                temp = url.charAt(url_length - i);
                if (temp == '=') {
                    i--;
                    break;
                }
                i++;
            }
            for (; i >= 1; i--) {
                id += url.charAt(url_length - i);
            }
            url = "doctor_patient_table.php?id=" + id;
            window.location.href = url;
            break;
        case 'update':
            var url = window.location.href;
            var url_length = url.length;
            var temp = "", i = 1, id = "";
            while (temp != '=') {
                temp = url.charAt(url_length - i);
                if (temp == '=') {
                    i--;
                    break;
                }
                i++;
            }
            for (; i >= 1; i--) {
                id += url.charAt(url_length - i);
            }
            url = "doctor_patient_update.php?id=" + id;
            window.location.href = url;
            break;
        case 'discharge':
            var url = window.location.href;
            var url_length = url.length;
            var temp = "", i = 1, id = "";
            while (temp != '=') {
                temp = url.charAt(url_length - i);
                if (temp == '=') {
                    i--;
                    break;
                }
                i++;
            }
            for (; i >= 1; i--) {
                id += url.charAt(url_length - i);
            }
            url = "discharge_patient.php?id=" + id;
            window.location.href = url;
            break;
        case 'leave_req':
            var url = window.location.href;
            var url_length = url.length;
            var temp = "", i = 1, id = "";
            while (temp != '=') {
                temp = url.charAt(url_length - i);
                if (temp == '=') {
                    i--;
                    break;
                }
                i++;
            }
            for (; i >= 1; i--) {
                id += url.charAt(url_length - i);
            }
            url = "doctor_req_leave.php?id=" + id;
            window.location.href = url;
            break;
    }
}

function doctor_panel() {
    var url = window.location.href;
    var url_length = url.length;
    var temp = "", i = 1, id = "";
    while (temp != '=') {
        temp = url.charAt(url_length - i);
        if (temp == '=') {
            i--;
            break;
        }
        i++;
    }
    for (; i >= 1; i--) {
        id += url.charAt(url_length - i);
    }
    url = "doctor_panel.html?id=" + id;
    window.location.href = url;
}

// Receptionist Functions
function reception_functions(page) {
    switch (page) {
        case 'create':
            window.location.href = "create_patient.html";
            break;
        case 'book':
            window.location.href = "book_doctor.php";
            break;
    }
}

function receptionist_panel() {
    window.location.href = "receptionist_panel.html"
}