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
            window.location.href = "doctor_patient_table.php";
            break;
        case 'update':
            window.location.href = "doctor_patient_update.php";
            break;
        case 'discharge':
            window.location.href = "discharge_patient.php";
            break;
        case 'leave_req':
            window.location.href = "doctor_req_leave.html";
            break;
    }
}

function doctor_panel() {
    window.location.href = "doctor_panel.html"
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