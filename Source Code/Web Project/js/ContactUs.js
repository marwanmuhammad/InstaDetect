let login = document.querySelectorAll(".login")
let reg = document.querySelectorAll(".reg")
let h = document.getElementById('contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
});

let logo = document.getElementById("header-logo")

function Toggles() {
    $(logo).fadeIn(1000, function() {
        $(logo).fadeOut(1000, function() {
            Toggles();
        })
    })
}
window.onload = function() {
    Toggles()
    contacts()
}

let contact = document.getElementById("contact")

function contacts() {
    $(contact).slideDown(5000, () => {

    });
}

login.forEach(eo => {
    eo.addEventListener("click", () => {
        localStorage.setItem("inv", "login")

    })
});
reg.forEach(eo => {
    eo.addEventListener("click", () => {
        localStorage.setItem("inv", "signp")

    })
});