// Front Page
function login_redirect() {
    window.location.href = "Frontend/Pages/login.html"
}

// Admin Functions

function admin_functions(page) {
    switch (page) {
        case 'doctor_view':
            window.location.href = "doctor_table.php";
            break;
        case 'doctor_add':

            break;
        case 'nurse_view':
            window.location.href = "nurse_table.php";
            break;
        case 'nurse_add':

            break;
        case 'room_add':

            break;
        case 'room_view':
            window.location.href = "room_table.php";
            break;
        case 'ward_add':

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