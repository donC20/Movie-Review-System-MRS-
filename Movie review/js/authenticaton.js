
$(document).ready(function () {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const page = urlParams.get('name');
    if (page == 'signup') {
        $('.form-signin').hide();
        $('.form-signup').show();
        document.title = 'SignUp-Create a new account';
    } else if(page=='logout') {
        window.location.href = 'http://localhost/review/login.php?name=login';
    }
    else {
        $('.form-signup').hide();
        $('.form-signin').show();
    }
});

// authentication

const form = document.querySelector('#form-signup');
// let s_user = form.elements.namedItem('s-username');
let s_three = document.querySelector('.s-three');
let s_four = document.querySelector('.s-four');

let password = form.elements.namedItem('s-password');
let Signup_button = form.elements.namedItem('submit');
let cpassword = form.elements.namedItem('confirm-password');
let icon1 = document.getElementById('check-bad');
let icon2 = document.getElementById('check-good');
let icon3 = document.getElementById('check-bconfirm');
let icon4 = document.getElementById('check-gconfirm');
const pass_reg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]/;
form.addEventListener('input', validate);
// cpassword.addEventListener('input', validate);
function validate(e) {
    let target = e.target.name;
    // target password
    if (e.target.name == "s-password") {
        if (pass_reg.test(e.target.value)) {
            Signup_button.disabled = false;
            icon1.style.visibility = "hidden";
            icon2.style.visibility = "visible";
            s_three.style.border = "none";
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else if (e.target.value.length < 8) {
            icon1.style.visibility = "visible";
            icon2.style.visibility = "hidden";
            s_three.style.border = "1px solid red";
            Signup_button.disabled = true;
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }
    // target cpassword
    if (e.target.name == "confirm-password") {
        if (e.target.value != password.value) {
            icon3.style.visibility = "visible";
            icon4.style.visibility = "hidden";
            s_four.style.border = "1px solid red";
            Signup_button.disabled = true;
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
        else {
            Signup_button.disabled = false;
            icon3.style.visibility = "hidden";
            icon4.style.visibility = "visible";
            s_four.style.border = "none";
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        }
    }
}

// tooltip

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))