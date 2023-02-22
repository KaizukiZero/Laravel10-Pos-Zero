import axios from "axios";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Js Custom

const toggleSwitch = document.body.querySelector(
    '.toggle-theme input[type="checkbox"]'
);
function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute("data-theme", "dark");
        localStorage.setItem("theme", "dark"); //add this
    } else {
        document.documentElement.setAttribute("data-theme", "light");
        localStorage.setItem("theme", "light"); //add this
    }
}

const currentTheme = localStorage.getItem("theme")
    ? localStorage.getItem("theme")
    : null;

if (currentTheme) {
    document.documentElement.setAttribute("data-theme", currentTheme);

    if (currentTheme === "dark") {
        toggleSwitch.checked = true;
    }
}

toggleSwitch.addEventListener("change", switchTheme, false);

const test = async () => {
    console.log("test-js");
};

test();

const xcon = document.querySelector(".x-container");
const reservation = document.querySelector(".reservation");
const service = document.querySelector(".service");
const menupage = document.querySelector(".menupage");
const delivery = document.querySelector(".delivery");
const accounting = document.querySelector(".accounting");

// return false
reservation.addEventListener("click", (e) => {
    axios.get("reservation").then((res) => {
        xcon.innerHTML = res.data;
    });
});

service.addEventListener("click", (e) => {
    axios.get("service").then((res) => {
        xcon.innerHTML = res.data;
    });
});

menupage.addEventListener("click", (e) => {
    axios.get("menu").then((res) => {
        xcon.innerHTML = res.data;
    });
});

delivery.addEventListener("click", (e) => {
    axios.get("delivery").then((res) => {
        xcon.innerHTML = res.data;
    });
});

accounting.addEventListener("click", (e) => {
    axios.get("accounting").then((res) => {
        xcon.innerHTML = res.data;
    });
});
