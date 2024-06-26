const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");
let log = document.querySelector(".container--signin");
let btn_SignIn = document.getElementById("btn-SignIn");
let btn_SignUp = document.getElementById("btn-SignUp");
let ex_icon = document.querySelector(".exit_icon");

signInBtn.addEventListener("click", () => {
    log.style.display = "block";
    log.style.opacity = "100%";
    container.classList.remove("right-panel-active");
})
signUpBtn.addEventListener("click", () => {
    log.style.opacity = "0%";
    container.classList.add("right-panel-active");

})

if (localStorage.inv == "login") {
    log.style.display = "block";
    log.style.opacity = "100%";
    container.classList.remove("right-panel-active");
} else if (localStorage.inv == "signup") {
    log.style.opacity = "0%";
    container.classList.add("right-panel-active");
}

function back() {
    history.back();
}
const passwordInput = document.getElementById('password');
const passwordToggle = document.querySelector('.password-toggle');


passwordToggle.addEventListener('click', function() {
  const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordInput.setAttribute('type', type);
  // Toggle the eye icon based on the password visibility
  if (type === 'password') {
    this.classList.remove('fa-eye');
    this.classList.add('fa-eye-slash');
  } else {
    this.classList.remove('fa-eye-slash');
    this.classList.add('fa-eye');
  }
});

const passwordinput = document.getElementById('Password-SignIn');
const passwordShow = document.querySelector('.password-show');

passwordShow.addEventListener('click', function() {
  const type = passwordinput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordinput.setAttribute('type', type);

  // Toggle the eye icon based on the password visibility
  if (type === 'password') {
    this.classList.remove('fa-eye');
    this.classList.add('fa-eye-slash');
  } else {
    this.classList.remove('fa-eye-slash');
    this.classList.add('fa-eye');
  }
});

